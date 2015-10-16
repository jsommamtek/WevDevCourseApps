<?php
	
	$dbHost = "localhost";
	$dbUser = "udemy";
	$dbPwd = "udemy";
	$dbName = "udemy";
	
	$connection = mysqli_connect ($dbHost, $dbUser, $dbPwd, $dbName);
	
	If (mysqli_connect_error()) {
		
		die (mysqli_connect_error());
	
	} else {
		
		echo "Connected to the Udemy database!<br />";
		
		$query = "select id, name, email, password from users";
		
		//$query = "insert into users (name, email, password) values ('Bill', 'jsomma@millentek.com', 'JsMtudemy')";
		
		//$query = "update users set name = 'Joey' where name = 'Joe' limit 1";
		
		// mysqli_query ($connection, $query);
		
		// echo ("Rows affected by query: ".mysqli_affected_rows($connection));
		
		if ($result = mysqli_query ($connection, $query)) {
			
			echo ("No of Rows: ".mysqli_num_rows($result)."<br />");
			
			while ($row = mysqli_fetch_array ($result)) {
			
				print_r($row);
				echo ("<br />");
			
			}
			
		} else {
			
			echo "Query failed agaist Udemy database!";
		} 
		
	}
	
?>