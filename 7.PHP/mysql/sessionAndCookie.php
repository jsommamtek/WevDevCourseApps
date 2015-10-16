<?php
	
	// Set Cookie

	setcookie ("id", "123", time() + 60 * 60 * 24);
	
	// Expire Cookie
	
	setcookie ("id", "", time() - 3600);
	
	echo ($_COOKIE["id"]);
	
	//session_start();
	
	// $_SESSION["loginId"] = 1;
	//$temp = "Hello!";
	
	//echo ($_SESSION["loginId"]);
	
?>