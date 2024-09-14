<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'akashsingh07672@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
			  "User email: $visitor_email.\n".
			  "Subject: $subject.\n".
			  "User Message: $message .\n";


$to = 'pankaj2016satna@gmail.com';

$headers = "From: $email_from \r\r";

$headers .="Reply-To: $visitor_email \r\r";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
