<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "hsmrkulj@gmail.com";
$mailheader = "From: $email \r\n";

mail($recipient, $mailheader) 
or die("Error!");
echo "Thank You!" . " -" . "<a 
href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
