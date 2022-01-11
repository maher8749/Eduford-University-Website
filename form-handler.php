<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from= 'info@yourwebsite.com';
$email_subject= 'New form submission';
$email_body= "User Name = $name.\n".
               "User email = $visitor_email.\n".
               "subject = $subject.\n".
               "User Message = $message.\n";

$to ='gmmaher11@gmail.com';

$header ="From: $email_from \r\n";
$header.=  "Reply-to: $visitor_email \r\n";

mail($to,$email_body,$email_subject,$header);

header("location: contact.html");

?>
