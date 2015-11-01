<?php

	$dbHost = "localhost";
	$dbUser = "udemy";
	$dbPwd = "udemy";
	$dbName = "udemy";
	
	$connection = mysqli_connect ($dbHost, $dbUser, $dbPwd, $dbName);

	// If there was a db error raised stop running PHP and die
	If (mysqli_connect_error()) {
		
		die (mysqli_connect_error());
	}
	
	//echo "<br />Connected to the Udemy database!";
	
?>