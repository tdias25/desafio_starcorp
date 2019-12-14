<?php

require 'vendor/autoload.php';

use \StarCorp\Numbers\MultipleOf3;
use \StarCorp\Numbers\MultipleOf5;
use \StarCorp\Numbers\MultipleOf3e5;
// use \StarCorp\Numbers\MultipleOf7;

$MultipesProvider = [
	MultipleOf3::class,
	MultipleOf5::class,
	MultipleOf3e5::class,
	// MultipleOf7::class,
];

for ($number=1; $number < 101 ; $number++) { 

	$output = $number;

	foreach ($MultipesProvider as $multipleObj) {

		$Multiple = new $multipleObj($number);

		if($Multiple->isMultiple())
			$output = $Multiple->toString();

	}

	echo $output;
	// echo "\n";
	echo "<br>";

}
