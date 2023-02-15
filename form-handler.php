<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$Coffee; = $_POST['coffee'];
$message; = $_POST['message'];

$email_from = 'davenykel47@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Coffee: $Coffee.\n".
               "User Message: $message .\n".;

$to = 'davenykel47@gmail.com';

$headers = "From $email_from \r\n";

$headers .= "Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html")

?>