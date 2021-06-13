<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];

	$email_from = 'intanapik01@gmail.com';

	$email_subject = "Someone want to be Your FRIEND!";

	$email_body = "Name: $name.\n". 
					"Email: $email.\n".
						"Number: $number.\n".
							"Message: $message.\n";
	$to = "intanapik01@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: Resume.html");
?>