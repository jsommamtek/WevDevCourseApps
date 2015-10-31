
$(".contentContainer").css("min-height", $(window).height());

// Get error status from PHP var on login.php
var error = "<?php echo addslashes($error); ?>"
var success = "<?php echo addslashes($success); ?>"

console.log ("error:" + error);

// Disply an error if one was generated by login.php
if (error !== "") {
			
			alert ("There were Errors");

			$("#message").addClass("alert alert-warning");
			$("#message").html("<strong>Warning!</strong><br />" + error);	

// Check for success message from login.php
} else if (success !== "") {
	
			alert ("There were Successes");

			$("#message").addClass("alert alert-success");
			$("#message").html("<strong>Success!</strong><br />" + success);

// Clear and hide any alert div status for a fresh start
} else {
		$("#message").removeClass("alert alert-success alert-warning alert-danger");
		
		alert ("No Error or Success Messages");

}

// Check debug status from login.php and display if turned on
var debugStatus = "<?php echo addslashes($debugOn); ?>";
var debug = "<?php echo addslashes($debug); ?>";

if (debugStatus) {
	
	alert ("debugStatus ON");
	
	$("#debug").addClass("alert alert-info");
			$("#debug").html("<strong>Debug Information</strong><br />" + debug);
	
} else {
	$("#debug").removeClass("alert alert-success alert-warning alert-danger");

}