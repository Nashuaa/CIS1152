<?php
/**
 * Lab 2, Arithmatic Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author Nash Krywka NashKrywka@gmail.com
 * @since 20150120
 */
/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */
define('GRAVITY', 9.8);
function truncateFloat($float_value)
{
	$float_value= (int)($float_value*100)/(100);
	echo $float_value;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
$degrees_k =($degrees_f - 32)*(5/9)+273.15;
echo $degrees_k;
}
/**
 * @param $area
 */
function dodecahedronVolume($area)
{
	$volume = ((15+sqrt(7))/(4))*pow($area, 3) ;
	echo $volume;
}
/**
 * @param $height
 */
function impactVelocity($height)
{
	$velocity = sqrt*((2)*(GRAVITY)*($height));
	echo $velocity;
}
$float_value(35)
$degrees_k(34)
$volume(33)
$velocity(45)