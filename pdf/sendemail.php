<?php
require 'phpmailer/class.phpmailer.php';
include 'phpmailer/class.smtp.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

/*$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail*/
$mail->Host = "mail.tiendasoxxo.com";
$mail->Port = 25; // or 587
$mail->IsHTML(true);
$mail->Username = "administrativo.colima";
$mail->Password = "*SISTEMAS11"; 

$mail->AddAddress("jmemox@gmail.com");
$mail->SetFrom("administrativo.colima@oxxo.com");
$mail->Subject = "Test";
$mail->Body = "hello";
//$mail->AddAttachment('images/phpmailer.gif');

if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}

?>