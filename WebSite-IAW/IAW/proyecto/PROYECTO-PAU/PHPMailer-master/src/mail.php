<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pruebasdemo20@gmail.com';                     // SMTP username
    $mail->Password   = 'contraseña_del_correo.';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pruebasdemo20@gmail.com', 'Pauchino - HC3.0.');
    $mail->addAddress('humancomputing3@gmail.com', 'HC3.es');     // Add a recipient
    $mail->addCC('pruebasdemo20@gmail.com', 'PRUEBAS DEMO 20');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Servicio médico - Su consulta ha sido recibida.';
    $mail->Body    = 'Mensaje de envio automático de su consulta. </b>';
    $mail->AltBody = 'Pauchino - de HC3 - mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}