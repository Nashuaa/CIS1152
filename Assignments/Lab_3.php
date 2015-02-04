<?php
/**
 * @param $temp_in_c
 */
function tempWarning($temp_in_c)
{
    // Use an if else statement
	if ($temp_in_c > 32){
    // Output the following text if the temp_in_c is above 32 degrees centigrade.
    echo "It's really hot out there, be careful!";}
    // Alternately output if the temp_in_c is below 7 degrees centigrade
	elseif ($temp_in_c < 7){ 
    echo "Brrrrr. Be sure to dress warmly.";}
	echo "<br>";
}
/**
 * @param $a
 * @param $b
 * @param $c
 */
function quadraticEquation($a, $b, $c)
{
    // Use and if else statement
	$discrim = $b * $b - 4 * $a * $c;
	if($discrim < 0 )
	{
		 echo "The equation has no real roots!";
		 echo "<br>";
	}
    // if the discrim equals zero do the following
	elseif ($discrim == 0 )
	{
		$root = -$b / (2 * a);
		echo "There is a double root at " . $root;
	}
    // if the discrim is greater than zero do the following
	else 
	{
		$discRoot = sqrt($b * $b - 4 * $a * $c);
		$root1    = (-$b + $discRoot) / (2 * $a);
		$root2    = (-$b - $discRoot) / (2 * $a);
		echo "The solutions are: " . $root1 . "and " . $root2;
		echo "<br>";
	}
}
/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150120
 */
/**
 * @param $letter
 */
function consinantOrVowel($letter)
{
    // Use a switch statement here
	switch ($letter)
	{
		case "a":
		case "e":
		case "i":
		case "o":
		case "u":
    echo $letter . " is a vowel";
	echo "<br>";
	break;
		case "b":
		case "c":
		case "d":
		case "f":
		case "g":
		case "h":
		case "j":
		case "k":
		case "l":
		case "m":
		case "n":
		case "p":
		case "q":
		case "r":
		case "s":
		case "t":
		case "v":
		case "w":
		case "x":
		case "y":
		case "z":
    echo $letter . " is a consonant";
	break;
		default:
    echo $letter . " is not a vowel or a consonant";
	echo "<br>";
}
}
/**
 * @param $number
 */
function oddOrEven($number)
{
    // Use the modulus and ternary operator to echo whether the number is odd or even
	$result = $number % 2 == 0 ?  'even':  'odd' ;
	echo "<br>";
	echo $result;
}
function countByThree($number)
{
    // Create a for loop that counts by threes to ninety-nine and outputs every increment from 3 up to and including ninety-nine
	for ($number = 0 ; $number > 99 ; $number +=3)
	{
		echo $number;
		echo "<br>";
	}
}
/**
 * @param $count
 */
function indefiniteFactorialLoop($count)
{
    // write a loop that starts at 0 and calculates the factorial to and including the value of count
		while ($count > 0 ) 
		{
			$factorial_product = $count;
			$factorial_product *= $count; 
			$count--;
		}
		echo "The factorial is " . $factorial_product;
}

// Insert function calls below.
tempWarning(50);
quadraticEquation(8, 7, 6);
consinantOrVowel("e");
oddOrEven(8);
countByThree(3);
indefiniteFactorialLoop(6);
