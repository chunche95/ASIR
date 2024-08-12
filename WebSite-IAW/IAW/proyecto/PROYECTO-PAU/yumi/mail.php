<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pruebasdemo20@gmail.com';                     // SMTP username
    $mail->Password   = 'Contraseña_del_correo.';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pruebasdemo20@gmail.com', 'Pauchino - HC3.0.');
    $mail->addAddress('humancomputing3@gmail.com', 'HC3.es');     // Add a recipient
    $mail->addCC('pruebasdemo20@gmail.com', 'PRUEBAS DEMO 20');
    $mail->addBCC('pruebasdemo20@gmail.com', 'PRUEBAS.20');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Su consulta ha sido recibida.- Servicio médico.';
    $mail->Body    = 'Hola! <br>
    Bienvenido a HC3.0  <br>
    Su consulta ha sido recibida correctamente.  <br>
    Este mensaje se envió de manera automática.  <br>
    Por favor, para cualquier consulta responder a <a href="mailto:paulino.esteban.bermudez@gmail.com">chunche95</a>.  <br>
    Gracias <br>
    Un cordial saludo HC3.0
    </b>';
    $mail->AltBody = 'Pauchino - de HC3 - mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}