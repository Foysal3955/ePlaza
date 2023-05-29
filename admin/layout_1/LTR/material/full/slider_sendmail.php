<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
try{
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = 'd47c3899e0ea5a';
$mail->Password = '99a02af3f2836a';

//Recipients
  $mail->setFrom('foysal123@gmsil.com', 'Mailer');
  $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
  $mail->addAddress('ellen@example.com');               //Name is optional
  $mail->addReplyTo('info@example.com', 'Information');
  $mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');


  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  $mail->addAttachment($uploads.'646e2a0e2fd81_Samsung-Galaxy-M33-5G-new.jpg', 'image.jpg');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
