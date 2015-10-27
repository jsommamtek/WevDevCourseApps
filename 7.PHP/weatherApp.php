<!doctype html>
<html>
<head>
    <title>My Weather App</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- APP CSS REF -->
	<link rel="stylesheet" href="assets/css/app.css">
	
</head>

<!-- MAIN BODY -->

<body>
	<div class="container main-container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 email-form">
			
				<h2 class="center">Weather App</h2>
				<p class="lead center">Get your weather report from any city around the world</p>
								
				<?php 
					echo $message;
				?>		
				
				<form name="weather" method="get">						
					
					<!-- WEATHER CITY -->
					<div class="form-group">
						<p class="center bold">Go ahead and enter your city below and click the "Get Weather" button</p>
						<input id="city" name="city" value="<?php echo $_GET['city']?>" type="text" class="form-control" placeholder="e.g. New York, London, ..."/>
					</div>
					
					<!-- GET WEATHER BUTTON -->
					<div class="form-group center">
						<input id="get-weather" name="weather" value="Get Weather" type="submit" class="btn btn-success btn-lg"/>
					</div>

				</form>
				
				<div id="message"></div>
							
			</div>
		</div>
	</div>
	
<!-- Include minified jquery library -->
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
			
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- APP Javascript -->
<script src="assets/js/app.js"></script>
	
</body>
</html>
