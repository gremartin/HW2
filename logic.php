<?php
date_default_timezone_set('America/New_York');
$currentHour = date("G");
$currentTime = date("H:i");
if (($currentHour >= 8) AND ($currentHour <= 20)){
	$backgroundColor = "41,151,244";
	$textColor = "black";
	}
else {
	$backgroundColor = "7,11,18";
	$textColor = "white";
	}
?>