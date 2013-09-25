<?php
$currentHour = date(G);
$currentTime = date(H:i);
if ($currentHour >= 8 and <= 20){
	$backgroundColor = "41,151,244";
	$textColor = "black";
	}
else {
	$backgroundColor = "7,11,18";
	$textColor = "white";
	}
?>