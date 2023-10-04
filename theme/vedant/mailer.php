<?php

$name = $_POST['name'];
$email = $_POST['email'];
$messageForm = $_POST['messageForm'];
$message = $_POST['message'];
$formcontent =" From: $name \n Subject: $messageForm \n Message: $message";
$recipient = "your_email@gmail.com"; 
$subject = "Add Your Subject Here";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location: contactthanks.php")

?>



