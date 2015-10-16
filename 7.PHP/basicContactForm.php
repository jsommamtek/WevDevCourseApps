<?php
if ($_POST["join"]){
			
	if ($_POST["toAddr"] AND $_POST["subject"] AND $_POST["body"]){		
		$message = '<div class="alert alert-success">All your fields have content and were submitted!';
		
		if (filter_var($_POST["toAddr"], FILTER_VALIDATE_EMAIL)){
		
			// CONSTRUCT AND SEND CONTACT EMAIL
			$emailTo = $_POST["toAddr"];
			$emailSubject = $_POST["subject"];
			$emailBody = $_POST["body"];
			
			//$emailHeader = "From: joesomma@gmail.com";
			
			//if (mail($emailTo, $emailSubject, $emailBody, $emailHeader)) {

			if (mail($emailTo, $emailSubject, $emailBody)) {
				$message .= "<br />Email Sent!<br /></div>";	

			} else {
				$message = '<div class="alert alert-danger"><br />Email Failed!<br /></div>';

			}
		} else {
			$message = '<div class="alert alert-danger"><br />Please enter a valid email address!<br /></div>';

		}
	} else {
		$message .= '<div class="alert alert-danger">You need to enter values for all input fields!</div>';
	}
}	
?>

<!doctype html>
<html>
<head>
    <title>My PHP Contact Form</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<style>
		.email-form {
			border: 1px solid grey;
			border-radius: 10px;
			margin-top: 20px;
		}
	</style>
		
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 email-form">
				
					<h2>Mailing List Contact Form</h2>
					<?php 
						echo $message;
					?>					
					<form name="contact" method="post">						
						<!-- TO ADDRESS -->
						<div class="form-group">
							<label for="toAddr">To:</label>
							<input name="toAddr" value="<?php echo $_POST['toAddr']?>" type="email" class="form-control" placeholder="email address"/>
						</div>
						<!-- SUBJECT -->
						<div class="form-group">
							<label for="subject">Subject:</label>
							<input name="subject" value="<?php echo $_POST['subject']?>" type="text" class="form-control" placeholder="subject"/>
						</div>
						<!-- MESSAGE BODY-->
						<div class="form-group">
							<label for="body">Body:</label>
							<textarea name="body" class="form-control" placeholder="message body"><?php echo $_POST['body']; ?></textarea>
						</div>
						<!-- JOIN LIST BUTTON -->
						<div class="form-group">
							<input name="join" value="Join List" type="submit" class="btn btn-success btn-lg"/>
						</div>
					</form>
				</div>
			</div>
		</div>
			
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
