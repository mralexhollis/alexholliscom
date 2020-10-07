<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	$emailTo = 'mr.alex.hollis@gmail.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = 'Website Enquiry - alexhollis.com';
	}
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('SEND');
	
?>
