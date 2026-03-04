<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['subject']) ||
    empty($_POST['message'])
) {
    exit('Datos inválidos');
}

$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';

try {
    $config = require '../usuario/config.php';
    // $mail->isSMTP();
    // $mail->Host = 'smtp.ionos.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'contacto@construmamparas.com.mx';
    // $mail->Password = $_SERVER['SMTP_PASSWORD'];
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->Port = 587;
    

    $mail->isSMTP();
    $mail->Host = 'smtp.ionos.mx';
    $mail->SMTPAuth = true;
    $mail->Username = 'contacto@construmamparas.com.mx';
    
    $mail->Password = $config['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('contacto@construmamparas.com.mx', 'Formulario Web');
    $mail->addAddress('contacto@construmamparas.com.mx', 'Contacto');

    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Formulario Web';

    $mail->Body = "
        <h3>Nuevo mensaje desde la web</h3>
        <p><strong>Nombre:</strong> {$_POST['name']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Mensaje:</strong><br>{$_POST['message']}</p>
    ";

    $mail->AltBody = "Nombre: {$_POST['name']}\nEmail: {$_POST['email']}\nMensaje:\n{$_POST['message']}";

    $mail->send();
    echo "OK";

} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}