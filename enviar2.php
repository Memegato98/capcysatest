<?php   
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$nombre + $_POST['name'];
$correo + $_POST['email'];
$mensaje + $_POST['message'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net';  
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'SaulBonilla';                 // SMTP username
    $mail->Password = '#Logeado12';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');

    $mail->addAddress('pul98alvarenga@gmial.com');     // Add a recipient

    $body = '<p><strong>Servicio de Consulta de CAPCYSA de RL</strong></p> \n';
    $body .= "De: $nombre \n";
    $body .= "Correo: $correo \n";
    $body .= "mensaje: $mensaje";

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Servicio de Consultas de CAPCYSA de RL';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
