<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

/** Configuracion de PHPMailer */
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'pul98alvarenga@gmail.com';
$mail->Password = 'alvarenguita1998';

$mail->SMTPSecure = 'tls';
$mail->Port =587;

/**===================================*/

/** Configuracion de Correo a Enviar */

$mail->serFrom('pul98alvarenga@gmail.com'); //REMITENTE
$mail->addAddress('pul98alvarenga@gmail.com'); //DESTINATARIO

$mail->Subjet = 'Servicio de Consulta de CAPCYSA de RL';
$mail->Body = 'Este es el cuerpo del correo';

/**===================================*/
/** Envio del email */

$mail->send();



?>