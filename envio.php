<?php

$name = $_POST['fname'];
$email = $_POST['femail'];
$phonenumber = $_POST['fphonenumber'];
$message = $_POST['fmessage'];
$para = "raulpaladines93@gmail.com";
$titulo = 'Contact Form';
$header = 'From: ' . $email;
$msjCorreo = "Name: $name\n Phone Number: $phonenumber\n E-Mail: $email\n Message:\n $message";

mail ($para,$titulo,$msjCorreo);  
		echo 'Message Sent, <a href="index.html">CLICK HERE</a> to go back.';
			

?>