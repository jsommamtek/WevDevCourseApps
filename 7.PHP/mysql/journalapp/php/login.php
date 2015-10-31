<?php

// Start a new Session
session_start();

$debugOn = FALSE;

$debug .= "<br />Session Id: ".$_SESSION['id'];

$error = "";

$debug .= "<br />error: ".$error;

$success = "";

if ($_GET['logout'] == 1 AND $_SESSION['id'] ) {
	session_destroy();
	$success = "You have been logged out, have a nice day!";
}
	
// PROCESS THE SIGN-UP FORM
if ($_POST['submit'] == "Sign Up") {	
	
	$debug .= "<br />Sign Up form was submitted";
	
	// Validate email address
	if (! $_POST['email']) {
		$error .= "<br />Please enter your email address";
		
	} else 
		if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error .= "<br />Please enter a valid email address";
			
		}
	
	//Validate password
	if (! $_POST['password']) {
		$error .= "<br />Please enter your password";
		
	// Make sure we have at least 8 chars
	} else
		if (strlen($_POST['password']) < 8) {
			
			// $debug .= strlen($_POST['password'']);
			
			$error .= "<br />Please enter a password with at least 8 characters";
		
		// Make sure we have at least one capital letter	
		} else
			if (!preg_match(".[A-Z].", $_POST['password'])) {
			
				$debug .= "<br />Password: ".$_POST['password'];
			
				$error .= "<br />Please include at least one capital letter in your password";
			
			}

	// Check for any validation failures and display those errors
	if ($error) {
		//$debug .= "<br />There were error(s) in your sign-up details".$error;
	
	// Initial input validation passed now we need to try to create the new account in the db		
	} else {
				
		// Connect to the database
		include("php/connection.php");
		
		// Build query to check if user email address already exists in the database
		$query = "select id from users where email = 
					'".mysqli_real_escape_string($connection, $_POST['email'])."'";
		
		//$debug .= "<br />query: ".$query;
					
		// Execute the check email query against the databse
		if ($result = mysqli_query ($connection, $query)) {
			
			//$debug .= ("<br />No of Rows: ".mysqli_num_rows($result));
			$rowsReturned = mysqli_num_rows($result);
			
			// Query was valid now check to see if there was a duplicate email address
			if ($rowsReturned > 0) {
				
				$error .= "<br /> Email address already exists in the database!";
			
			// No email address match in DB so go ahead and create the new user account
			} else {
				
				// Insert the new user account into the database users table
				$query = "insert into users (email, password) 
							values ('".mysqli_real_escape_string($connection, $_POST['email'])."',
									'".mysqli_real_escape_string($connection, md5(md5($_POST['email']).$_POST['password']))."')";
									
				//$debug .= "<br />query: ".$query;
				
				// Run the insert and check if query was valid
				if ($result = mysqli_query ($connection, $query)) {
					
					//$debug .= "<br />results: ".$result;
					
					// Query was valid now check if the rows affected was > 0 returned to $result var
					if ($result > 0) {
						
						// Set the user session variable to keep the user logged in
						$_SESSION['id'] = mysqli_insert_id($connection);
						$debug .= "<br />Session Id: ".$_SESSION['id'];
						
						// Insert was successful and new user account was created	
						$success .= "<br />Success! You passed all your validation rules and were signed up successfully.";
						
						// Clean up a bit
						$_POST['email'] = "";
						$_POST['password'] = "";
						mysqli_free_result($result);
						
						// Close connection to the database
						mysqli_close($connection);				

						// TODO: Redirect user from sign-up page to logged in Diary Home Page
						//flush();
						header("Location:php/mainpage.php");
						exit();
																		
					} else {
						
						$error .= "<br />Problem! No rows were inserted into the database.";					
						
					}
				
				// Something was wrong with the Insert query: bad table or column name etc.
				} else {
					
					$error .= "<br />Query failed agaist Udemy database!";
					
				}

				//$query = "update users set name = 'Joey' where name = 'Joe' limit 1";
				// $debug .= ("Rows affected by query: ".mysqli_affected_rows($connection));

			}
			
			/* while ($row = mysqli_fetch_array ($result)) {
			
				print_r($row);
				$debug .= ("<br />");
			
			}
			*/
							
		// Something was wrong with the Select query: bad table or column name etc.
		} else {
			
			$error .= "<br />Query failed agaist Udemy database!";
		} 
		
	}
	
	
// PROCESS THE LOG-IN FORM
} else if ($_POST['submit'] == "Log In") {	

		$debug .= "</br />Log In form was submitted";
		
		// Connect to the database
		include("php/connection.php");
		
		// Build query to validate user account info in the database
		$query = "SELECT id FROM users WHERE email = 
					'".mysqli_real_escape_string($connection, $_POST['loginEmail'])."' AND password ='"
						.mysqli_real_escape_string($connection, md5(md5($_POST['loginEmail']).$_POST['loginPassword']))."' LIMIT 1";
		
		//$debug .= "<br />query: ".$query;
					
		// Execute the Log In query
		if ($result = mysqli_query ($connection, $query)) {
			
			$rowsReturned = mysqli_num_rows($result);
			
			// Query was valid now check to see if we have the user account match we need to login
			if ($rowsReturned > 0) {

				// Get the user db row identifier and set the user session variable to keep the user logged in
				$row = mysqli_fetch_array($result);
													
				$_SESSION['id'] = $row["id"];
				$debug .= "<br />Session Id: ".$_SESSION['id'];
				
				// Log In was successful
				$success .= "<br />Success! You have been logged into the system, welcome!";
				
				// Clean up a bit
				$_POST['loginEmail'] = "";
				$_POST['loginPassword'] = "";
				mysqli_free_result($result);
				
				// Close connection to the database
				mysqli_close($connection);
									
				// TODO: Redirect user from Log In page to Diary Home Page
				//flush();
				header("Location:php/mainpage.php");
				exit();
			
			// No matching account was found in the database
			} else {
				
				$error .= "<br /> Sorry! Your account information was not found in the database.";

			}
							
		// Something was wrong with the Select query: bad table or column name etc.
		} else {
			
			$error .= "<br />Query failed agaist Udemy database!";
		} 
			
}

if ($_POST['submit'] == "Clear Session") {
	
	session_destroy();
	
}

?>