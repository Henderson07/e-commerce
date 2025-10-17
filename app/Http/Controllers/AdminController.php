<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
