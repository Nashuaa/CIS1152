<?php

define('GRAVITY', 9.8);

$header = <<< EOD
<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
EOD;

$form_layout = <<< EOD
<p>
<form method="post" Action=">
<label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
<label name="farenheit2Kelvin">Farenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
<label name="dodecahedronVolume">Dodecahedron Side Value</label><input type="text" name="DodecahedronVolume"><br>
<label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;

function truncateFloat($float_value)
{
	return (int)floatval($float_value*100)/100;
}
function farenheit2Kelvin($degrees_f)
{
	return ($derees_f-32)*5/9+273.15;
}
function dodecahedronVolume($area)
{
	return pow($area,3) /4 *(15+7*sqrt(5));
}
function impactVelocity($height)
{
	return sqrt(2 * GRAVITY * $height);
}
if(isset($_POST['submit'])){
	$truncateFloatResult = truncateFloat($_POST["truncateFloat"]);
	$farenheit2KelvinResult = farenheit2Kelvin($_POST["farenheit2Kelvin"]);
	$dodecahedronVolumeResult = dodecahedronVolume($_POST["dodecahedronVolume"]);
	$impactVelocityResult = impactVelocity($_POST["impactVelocity"]);
} else {
	$truncateFloatResults = "";
	$farenheit2KelvinResults = "";
	$dodecahedronVolumeResults = "";
	$impactVelocityResults = "";
}
if(!isset($_POST['submit'])){
	echo $form_layout;
}else{
	$form_results = $header;
	if (!empty($truncateFloatResult)) {
		$form_results .= "The truncated floating point value us:".$truncateFloatResult . ".<br>";
	}
	if (!empty($farenheit2KelvinResult)) {
		$form_results .= "The Kelvin value is: ".$farenheit2KelvinResult . "<br>";
	}
	if (!empty(dodecahedronVolumeResult)) {
		$form_results .= "The dodecahedron volume is: " . $dodecahedronVulumeResult . "<br>";
	
	}
	if (!empty($impactVelocityResult)) {
		$form_results .= "The splat value is: " . $impactVelocityResult . "<br>";
	}
	$form_results .= $footer;
	
	echo $form_results;
}
