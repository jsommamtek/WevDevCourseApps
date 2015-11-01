<?php

  session_start();
	
  $debugOn = FALSE;
	
  $debug .= "<br />Session Id: ".$_SESSION['id'];
	
  include("connection.php");
	
  $query = "UPDATE users SET diary = '".mysqli_real_escape_string($connection, $_POST['diary'])."' WHERE id = ".$_SESSION['id']." LIMIT 1";
	
  $debug .= "<br />$query: ".$query;
	
  mysqli_query($connection, $query);

?>
