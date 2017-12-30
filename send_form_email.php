<?php
$recipient = "breezewrite.service@gmail.com";
$name = $_POST['name']; // required
$essaytype = $_POST['essaytype']; // required
$wordcount = $_POST['wordcount']; // required
$email = $_POST['email']; // not required
$message = $_POST['message'];
//creating message
$content = "New contact form submission \n From: ".$name.",\n Email: ".$email.", \n Message: ".$message."\n Word Count: ".$wordcount."\n Essay Type: ".$essaytype;
//sending message
mail($recipient, "New Order", $content);
?>
