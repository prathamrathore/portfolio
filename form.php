<?php

$name = $_POST['text'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

 // $to = 'pk819199@gmail.com';
 // $subject = 'Website Contactform';
 // $msg = $name . " " . $email . " " . $message;

 // mail($to, $subject, $msg);

require 'phpmailer/PHPMailerAutoload.php';



$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;

$mail->setFrom('pk819199@gmail.com',$name);
$mail->addAddress('pk819199@gmail.com');
$mail->Subject = 'Viewers';
$mail->Body = $message;

if ($mail->send())
    echo "Mail sent";
?>