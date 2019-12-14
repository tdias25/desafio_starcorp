<?php
namespace StarCorp\Numbers;
use StarCorp\Numbers\Number;

class MultipleOf7 implements Number
{
	private $number;

	function __construct($number) 
	{
		$this->number = $number;
	}

	function isMultiple() 
	{
		return !($this->number % 7);
	}

	function toString()
	{
		return 'Testing 7777777777';
	}
}