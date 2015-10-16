<?php
	
	echo "This is PHP";
	
	$test = "I'm a variable";
	
	$test2 = "Me Too!";
	
	$number = 75;
	
	$name = "Joe";
	
	echo "<br /><br />";
	echo "My Name is ".$name;
	
	$myArray = array("pizza", "chocolate", "coffee");

	echo "<br /><br />";
	print_r($myArray);
	
	echo "<br /><br />";
	echo $myArray[1];
	
	
	$anotherArray[0] = "pizza";
	$anotherArray[1] = "yogurt";

	echo "<br /><br />";
	print_r($anotherArray);
	
	$thirdArray = array(
		
		"France" => "French",
		"USA" => "English", 
		"Germany" => "German"	
	);
	
	echo "<br /><br />";
	print_r($thirdArray);
	
	$anotherArray[] = "salad";

	echo "<br /><br />";
	print_r($anotherArray);
	
	unset($thirdArray["Germany"]);
	
	echo "<br /><br />";
	print_r($thirdArray);
	

	echo "<br /><br />";
	
	$number = 1;
	
	if ($number = 1 OR $number > 0) {
		
		echo "True!";
	} else {
		
		echo "False!";
	}
	
	echo "<br /><br />";
	
	for ($i=1; $i<=10; $i=$i+2) {
		echo "<br /><br />";	
		echo $i;
	}
	
	echo "<br /><br />";
	
	$array = array("cat", "dog", "kangaroo", "turtle");
	
	print_r($array);
	
	echo "<br /><br />";
	foreach ($array as $key => $value) {
		echo "Key: $key  Value: $value <br />";
	}
	
	echo "<br /><br />";
	
	$i = 0;
	
	$array = array("apple", "banana", "grape");
	
	while ($array[$i]) {
		echo "Key: $i Value: $array[$i]<br />";
		$i++;
	}
	
	
?>
	