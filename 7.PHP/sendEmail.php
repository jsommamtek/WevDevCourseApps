<!DOCTYPE html>
<html>
<head>
	<title>My First PHP App</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
</head>
<body>
	<div>
		<?php

			/*
				This code sends mail through local postfix which is configured 
				with SendGrid relay settings to forward mail through SendGrid
			*/

			echo "Hello PHP!";
			
			$emailTo = "jsomma@millentek.com";
			$emailSubject = "PHP Email Test 2";
			$emailBody = "Yo what's up from PHP App?";
			//$emailHeader = "From: joesomma@gmail.com";
			
			//if (mail($emailTo, $emailSubject, $emailBody, $emailHeader)) {

			if (mail($emailTo, $emailSubject, $emailBody)) {
				
				echo "<br /> Email Sent!";
				
			} else {
				
				echo "<br /> Email Failed!";

			}
			
		?>
	</div>
</body>
</html>
