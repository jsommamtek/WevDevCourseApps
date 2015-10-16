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

	<!-- LOCAL CSS -->
	<style>
		
		html, body {
			height: 100%;
		}

		.main-container {
			width: 100%;
			height: 100%;
			background-image: url("weather-app-background.jpeg");
			background-position: center;
			padding-top: 10px;
		}
		
		.center {
			text-align: center;	
		}
		
		.bold {
			font-weight: bolder;
		}
		
		
	</style>
		
</head>
<body>
	<div class="container main-container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 email-form">
			
				<h2 class="center">Amazing Weather App</h2>
				<p class="lead center">Aamazing application to help you get the weather!</p>
								
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

<!-- LOCAL JAVASCRIPT -->
<script>
	
	$("#get-weather").click(function(event) {
		
		event.preventDefault();
		
		if ($("#city").val() != "") {
		
			$.get("scraper.php?city=" + $("#city").val(), function(data){
				
				//alert(data);
				
				// Clear and hide any alert Div status for a fresh start
				$("#message").removeClass("alert alert-success alert-warning alert-danger");

				// If the city was not found then display a message
				if (!data) {
					

					$("#message").addClass("alert alert-warning");
					$("#message").html("<strong>Warning!</strong><br />We're sorry we could not find the city you entered, please try again!");		
					
				// City was found - display the weather
				} else {
				
					$("#message").addClass("alert alert-success");
					$("#message").html("<strong>Your Weather Report for " + $("#city").val() + " is:</strong><br />" + data);		
				
				}
			});
		
		} else {
			
			//alert("Please enter a city!");
			
			$("#message").addClass("alert alert-danger");
			$("#message").html("<strong>Warning!</strong><br />Please enter a city and try again!");
		}
	});
	
</script>
	
</body>
</html>
