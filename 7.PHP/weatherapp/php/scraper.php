<?php

	$city = $_GET["city"];
	
	$city = str_replace(" ", "", $city);
	
	//echo $city."<br />";
	
	$cityUrl = "http://www.weather-forecast.com/locations/".$city."/forecasts/latest";
	
	//echo $cityUrl."<br />";
	
	$weatherContent = file_get_contents($cityUrl);
	
	$expression = '/4 &ndash; 7 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/span>/s';
	
	//echo $expression."<br />";
	
	preg_match($expression, $weatherContent, $matches);
	
	print_r($matches[1]);

?>