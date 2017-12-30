<?php
// the message
$name = $_GET['name']; // required
$essaytype = $_GET['essaytype']; // required
$wordcount = $_GET['wordcount']; // required
$email = $_GET['email']; // not required
$message = $_GET['message']; // required
$emailbody = "Name: ".$name."\n"."Word Count: ".$wordcount."\n"."Email Address: ".$email."\n"."Additional Instructions: ". $message;
// send email
mail("breezewrite.service@gmail.com","New Order",$emailbody);
?>
