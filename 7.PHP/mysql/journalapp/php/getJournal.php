<?php

  session_start();
  
  $debugOn = FALSE;
  
  include("connection.php");
  
  $debug .= "<br />Session Id: ".$_SESSION['id'];
  
  $query = "SELECT diary FROM users WHERE id = ".$_SESSION['id']." LIMIT 1";
  
  $debug .= "<br />Query: ".$query;
  
  $result = mysqli_query($connection, $query);
  
  $row = mysqli_fetch_array($result);
  
  $diary = $row['diary'];
  
?>