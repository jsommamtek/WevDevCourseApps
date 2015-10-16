<!doctype html>
<html>
<head>
    <title>Post Code Finder</title>

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
			background-image: url("background.jpeg");
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
			
				<h2 class="center">Postal Code Finder App</h2>
				<p class="lead center">Amazing application to help you find your postal code!</p>
				
				<form name="postal-code" method="get">						
					
					<!-- ADDRESS -->
					<div class="form-group">
						<p class="center bold">Go ahead and type in your address below and click the "Get Postal Code" button</p>
						<input id="address" name="address" type="text" class="form-control" placeholder="e.g. 30 Ridgewood Avenue, Gilford, NH"/>
					</div>
					
					<!-- GET POSTAL CODE BUTTON -->
					<div class="form-group center">
						<input id="get-postal-code" name="postcode" value="Get Postal Code" type="submit" class="btn btn-success btn-lg"/>
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
	
		
	$("#get-postal-code").click(function(event) {

		// Clear and hide any alert Div status for a fresh start
		$("#message").removeClass("alert alert-success alert-warning alert-danger");

		event.preventDefault();
		
		// Initialize result status
		var result = 0;
		var postalCode = "";
		
		if ($("#address").val() != "") {
		
			// Make the async call to the Google Maps API
			$.ajax ({
				type: "GET",
				url: "https://maps.googleapis.com/maps/api/geocode/xml?address=" + encodeURIComponent($('#address').val()) + "&key=AIzaSyAcx7wjqA3PSUjEKc8F_U2Hwy26zXDyKtU",
				dataType: "xml",
				success: processXML,
				error: processError
				
			});
			
			function processError(){
				alert("Could not connect to server.");
			}
			
			function processXML(xml){

				// Looping potentially through multiple results
				$(xml).find("address_component").each(function(){

					if ($(this).find("type").text() == "postal_code"){
						
						// Postal Code was found - capture the result
						postalCode += "<br />" + $(this).find("long_name").text();
						
					}
					
				});
				
				
				// Check for results from ajax call to google api above
				if (postalCode != "") {
					
					// Postal Code was found - display the result
					$("#message").addClass("alert alert-success");
					$("#message").html("<strong>Your Postal Code for " + $("#address").val() + " is:</strong><br />" + postalCode);
				
				} else {
					
					// If the address was not found then set result status
					$("#message").addClass("alert alert-warning");
					$("#message").html("<strong>Warning!</strong><br />We're sorry we could not find the Postcode for the address you entered, please try again!");	

				}
				
			}
				
		} else {
			
			// Address was not entered			
			$("#message").addClass("alert alert-danger");
			$("#message").html("<strong>Warning!</strong><br />Please enter an address and try again!");
		}
	});
	
</script>
	
</body>
</html>



