<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use constGuards;
use constDefaults;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use LDAP\Result;

class AdminController extends Controller
{
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $request->validate([
                'login_id' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:45'
            ], [
                'login_id.required' => 'Email ou usuário é necessário',
                'login_id.email' => 'Email inválido',
                'login_id.exists' => 'Email não existe',
                'password.required' => 'Senha é obrigatória'
            ]);
        } else {
            $request->validate([
                'login_id' => 'required|exists:admins,username',
                'password' => 'required|min:5|max:45'
            ], [
                'login_id.required' => 'Email ou usuário é necessário',
                'login_id.email' => 'Username inválido',
                'password.required' => 'Senha é obrigatória'
            ]);

            $creds = array(
                $fieldType => $request->login_id,
                'password' => $request->password
            );

            if (Auth::guard('admin')->attempt($creds)) {
                return redirect()->route('admin.home');
            } else {
                session()->flash('fail', 'Credênciais incorretas');
                return redirect()->route('admin.login');
            }
        }
    }

    public function logoutHandler(Request $request)
    {
        Auth::guard('admin')->logout();
        session()->flash('fail', 'Você está desconectado');
        return redirect()->route('admin.login');
    }

    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
        ], [
            'email.required' => 'Email ou usuário é necessário',
            'email.email' => 'Email inválido',
            'email.exists' => 'Email não existe',
        ]);

        //Get admin details
        $admin = Admin::where('email', $request->email)->first();

        //Generate Token
        $token = base64_encode(Str::random(64));

        //Check if there is an existing reset password token
        $oldToken = DB::table('password_resets')->where(['email' => $request->email, 'guard' => constGuards::ADMIN])->first();

        if ($oldToken) {
            //Update token
            DB::table('password_resets')->where(['email' => $request->email, 'guard' => constGuards::ADMIN])->update([
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        } else {
            //Add new token
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'guard' => constGuards::ADMIN,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        $actionLink = route('admin.reset-password', ['token' => $token, 'email' => $request->email]);

        $data = array(
            'actionLink' => $actionLink,
            'admin' => $admin
        );

        $mail_body = view('email-templates.admin-forgot-email-email-template', $data)->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME'),
            'mail_recipient_email' => $admin->email,
            'mail_recipient_name' => $admin->name,
            'mail_subject' => 'Reset password',
            'mail_body' => $mail_body
        );

        if (sendEmail($mailConfig)) {
            session()->flash('success', 'Enviamos seu link para redefinição de senha por e-mail.');
            return redirect()->route('admin.forgot-password');
        } else {
            session()->flash('fail', 'Algo deu errado!');
            return redirect()->route('admin.forgot-password');
        }
    }

    public function resetPassword(Request $request, $token = null)
    {
        $check_token = DB::table('password_resets')->where(['token' => $token, 'guard' => constGuards::ADMIN])->first();

        if ($check_token) {
            //Check if token is not expired
            $diffMins = Carbon::createFromFormat('Y-m-d H:i:s', $check_token->created_at)->diffInMinutes(Carbon::now());

            if ($diffMins > constDefaults::tokenExpiredMinutes) {
                //if token expired
                session()->flash('fail', 'Token expirado, solicitar outro link para redefinir a senha!');
                return redirect()->route('admin.forgot-password', ['token' => $token]);
            } else {
                return view('backend.pages.admin.auth.reset-password')->with(['token' => $token]);
            }
        } else {
            session()->flash('fail', 'Token inválido, solicitar outro link para redefinir a senha!');
            return redirect()->route('admin.forgot-password', ['token' => $token]);
        }
    }
}
