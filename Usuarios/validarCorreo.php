<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar la biblioteca PHPMailer
require 'vendor/autoload.php';

// Capturar la dirección de correo electrónico ingresada en el formulario HTML
$correo = $_POST['correo'];


$smtpHost = 'smtp.mail.yahoo.com';
$smtpUsername = 'cupidcode@yahoo.com';
$smtpPassword = 'topicos1906';
$smtpPort = 587; // Puerto TLS


$mail = new PHPMailer(true);

try {
    // Configura el servidor SMTP de Yahoo
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'tls'; // Usa 'ssl' si prefieres SSL
    $mail->Port = $smtpPort;

    $mail->setFrom('cupidcode@yahoo.com', 'CupidCode');
    $mail->addAddress($correo); 
    
    // Contenido del correo electrónico
    $mail->isHTML(true);
    $mail->Subject = 'Correo de validación';
    $mail->Body = 'Por favor, haz clic en el siguiente enlace para validar tu correo electrónico: <a href="https://www.example.com/validar">Validar correo electrónico</a>';

    // Envía el correo electrónico
    $mail->send();
    echo 'El correo electrónico ha sido enviado con éxito.';
} catch (Exception $e) {
    echo "No se pudo enviar el correo electrónico. Error: {$mail->ErrorInfo}";
}
?>
