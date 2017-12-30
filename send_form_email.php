<?php
// the message
$name = $_POST['name']; // required
$essaytype = $_POST['essaytype']; // required
$wordcount = $_POST['wordcount']; // required
$email = $_POST['email']; // not required
$message = $_POST['message']; // required
$emailbody = "Name: ".$name."\n"."Word Count: ".$wordcount."\n"."Email Address: ".$email."\n"."Additional Instructions: ". $message;
// send email
mail("breezewrite.service@gmail.com","New Order",$emailbody);
?>
