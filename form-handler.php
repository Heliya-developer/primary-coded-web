<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from ='دومین وب سایت';
$email_subject = 'NEW FORM SUBMISSION';
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message:$message.\n";

$to = 'ایمیلی که می خواییم ارسال بشه بهش';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n" ;

mail($to,$email_subject,$headers);

header("Location:contact.html");

?>