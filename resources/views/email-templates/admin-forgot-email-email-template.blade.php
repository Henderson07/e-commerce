<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Redefinição de Senha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reseta estilos para consistência */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            line-height: 100%;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: #f4f4f4;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Responsividade */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                border-radius: 0 !important;
            }

            .content {
                padding: 25px !important;
            }

            .btn {
                width: 100% !important;
                display: block !important;
            }

            .header h1 {
                font-size: 22px !important;
            }

            .footer-text {
                font-size: 12px !important;
            }
        }
    </style>
</head>

<body>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 40px 10px;">
                <table class="email-container" width="600" cellpadding="0" cellspacing="0"
                    style="max-width:600px;background-color:#ffffff;border-radius:8px;
                              overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.1);">
                    <!-- Cabeçalho -->
                    <tr>
                        <td class="header" align="center" style="background-color:#2563eb;padding:30px;">
                            <h1 style="color:#ffffff;margin:0;font-size:26px;">E-commerce</h1>
                        </td>
                    </tr>
                    <!-- Corpo -->
                    <tr>
                        <td class="content" style="padding:40px 35px;color:#333333;font-size:16px;line-height:1.6;">
                            <p>Olá <strong>{{ $admin->name }}</strong>,</p>
                            <p>
                                Recebemos uma solicitação para redefinir a senha da sua conta de E-commerce
                                associada a <strong>{{ $admin->email }}</strong>.
                            </p>
                            <p>Para criar uma nova senha, clique no botão abaixo:</p>

                            <p style="text-align:center;margin:30px 0;">
                                <a href="{{ $actionLink }}" target="_blank" class="btn"
                                    style="background-color:#22bc66;color:#ffffff;text-decoration:none;
                                          padding:14px 30px;border-radius:6px;display:inline-block;
                                          font-weight:bold;font-size:16px;">
                                    Redefinir Senha
                                </a>
                            </p>

                            <p><strong>Observação:</strong> este link é válido por 15 minutos.</p>
                            <p>Se você não solicitou a redefinição de senha, pode ignorar este e-mail com segurança.</p>

                            <hr style="border:none;border-top:1px solid #ddd;margin:35px 0;">
                            <p class="footer-text" style="font-size:13px;color:#888;text-align:center;">
                                © {{ date('Y') }} E-commerce. Todos os direitos reservados.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
