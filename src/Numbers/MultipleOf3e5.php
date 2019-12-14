<?php

namespace StarCorp\Numbers;
use StarCorp\Numbers\Number;

class MultipleOf3e5 implements Number
{
	private $number;

	function __construct($number) 
	{
		$this->number = $number;
	}

	function isMultiple() 
	{
		return !($this->number % 5) && !($this->number % 3);
	}

	function toString()
	{
		return 'StarCorpianos';
	}
}