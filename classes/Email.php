<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    protected $email;
    protected $nombre;
    protected $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'a800697267133a';
        $mail->Password = '93f930d3b46765';

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Confirma tu Cuenta';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido.= '<body>';
        $contenido.= '<h1>Hola '. $this->nombre. '</h1>';
        $contenido.= '<p>Para confirmar tu cuenta de UpTask, haz click en el siguiente enlace:</p>';
        $contenido.= '<a href="http://localhost:3000/confirmar?token='. $this->token. '">Confirmar Cuenta</a>';
        $contenido.= '<p>Si no creaste una cuenta, ignora este mensaje</p>';
        $contenido.= '</body>';
        $contenido.= '</html>';

        $mail->Body = $contenido;
        $mail->send();
    }

    public function enviarInstrucciones()
    {
        // Looking to send emails in production? Check out our Email API/SMTP product!
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'a800697267133a';
        $mail->Password = '93f930d3b46765';

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Confirma tu Cuenta';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido.= '<body>';
        $contenido.= '<h1>Hola '. $this->nombre. '</h1>';
        $contenido.= '<p>Para recuperar tu cuenta de UpTask, haz click en el siguiente enlace:</p>';
        $contenido.= '<a href="http://localhost:3000/restablecer?token='. $this->token. '">Reestablecer Contraseña</a>';
        $contenido.= '<p>Si no intentas recupear tu cuenta, ignora este mensaje</p>';
        $contenido.= '</body>';
        $contenido.= '</html>';

        $mail->Body = $contenido;
        $mail->send();
    }
}
