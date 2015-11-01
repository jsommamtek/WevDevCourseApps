<?php
		
	$dbHost = "localhost";
	$dbUser = "joesomma_udemy";
	$dbPwd = "rgQMvEaYon44KcXE";
	$dbName = "joesomma_udemy";
	
	$connection = mysqli_connect ($dbHost, $dbUser, $dbPwd, $dbName);

	// If there was a db error raised stop running PHP and die
	If (mysqli_connect_error()) {
		
		die (mysqli_connect_error());
	}
	
	$debug .= "<br />Connected to the Udemy database!";
	
?>