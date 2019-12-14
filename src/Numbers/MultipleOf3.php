<?php

namespace StarCorp\Numbers;
use StarCorp\Numbers\Number;

class MultipleOf3 implements Number
{
	private $number;

	function __construct($number) 
	{
		$this->number = $number;
	}

	function isMultiple() 
	{
		return !($this->number % 3);
	}

	function toString()
	{
		return 'StarCorp';
	}
}