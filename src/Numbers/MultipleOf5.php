<?php
namespace StarCorp\Numbers;
use StarCorp\Numbers\Number;

class MultipleOf5 implements Number
{
	private $number;

	function __construct($number) 
	{
		$this->number = $number;
	}

	function isMultiple() 
	{
		return !($this->number % 5);
	}

	function toString()
	{
		return 'IT';
	}
}