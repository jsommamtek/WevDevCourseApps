<?php

	//echo "hello world!";
	
	session_start();
		
	require "vendor/autoload.php";
	
	use Abraham\TwitterOAuth\TwitterOAuth;
	
	$apiKey="QaRFKd3b36dvVji3kZUGBgUmd";
	$apiSecret="6DnZEtvK7FS6qG58433MCEj3eWLbIXsL2xbqFQb1MbBNVgVgUZ";
	$accessToken="3256171280-g16yIDWvlz3a0A7TzYPX48LlZI9W5sO2BKA1zF1";
	$accessSecret="2RXmmUa9BLrgbgflMhrYuXFwlC72zCxqpkf3GOwr2NH5M";
	
	$connection = new TwitterOAuth($apiKey, $apiSecret, $accessToken, $accessSecret);
	//$content = $connection->get("account/verify_credentials");
	

	
	// GET SAMPLE CALLS
	//$statuses = $connection->get("statuses/user_timeline", array("count" => 10, 
	//															 "exclude_replies" => true,
	//															 "screen_name" => billgates));

	$tweets = $connection->get("statuses/home_timeline", array("count" => 100, 
															   "exclude_replies" => true));

	//print_r($content);
	//print_r($statuses);
	
	//echo json_encode($statuses);

	// Loop through and display latest tweets

	foreach($tweets as $tweet) {
		
		if ($tweet->favorite_count >= 2) {
			
			$embed = $connection->get("statuses/oembed", array("id" => $tweet->id));

			//print_r($embed);
			
			echo $embed->html;	
			
			//echo "<br />";	
			
		}
		
	}

	// POST SAMPLE CALLS
	//$statuses = $connection->post("statuses/update", array("status" => "This is a test"));
																 
	//https://api.twitter.com/1.1/statuses/update.json?status=Maybe%20he%27l	
	
	//print_r($statuses);															 
		
?>