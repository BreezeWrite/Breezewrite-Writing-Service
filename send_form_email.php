<?php
$recipient = "breezewrite.service@gmail.com";
$name = $_GET['name']; // required
$essaytype = $_GET['essaytype']; // required
$wordcount = $_GET['wordcount']; // required
$email = $_GET['email']; // not required
$message = $_GET['message'];
//creating message
$content = "New contact form submission \n From: ".$name.",\n Email: ".$email.", \n Message: ".$message."\n Word Count: ".$wordcount."\n Essay Type: ".$essaytype;
//sending message
mail($recipient, "New Order", $content);
?>
