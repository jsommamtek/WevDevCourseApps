/* APPLICATION JAVASCRIPT */

$("#get-weather").click(function(event) {
	
	event.preventDefault();
	
	if ($("#city").val() != "") {
	
		$.get("php/scraper.php?city=" + $("#city").val(), function(data){
			
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