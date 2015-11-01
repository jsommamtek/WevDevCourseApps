<?php`
	session_start();
	
	//print_r($_SESSION);
	
	include("connection.php");
	
	$query = "UPDATE users SET diary = '".mysqli_real_escape_string($connection, $_POST['diary'])."' WHERE id = ".$_SESSION['id']." LIMIT 1";
	
	//echo $query;
	
	mysqli_query($connection, $query);

?>
