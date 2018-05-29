<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "contato@acampbethel.com.br";
$subject = "Formulário de contato";
$mailheader = "From: $email \r\n";
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($recipient, $subject, $formcontent, $headers) or die("Error!");
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "OK";
