<?php

namespace StarCorp\Numbers;

use PHPUnit\Framework\TestCase;

class MultiplesTest extends TestCase
{
	
	function testIsMultiple() {

		$MultipleOf3 = new MultipleOf3(3);

		$MultipleOf5 = new MultipleOf5(5);

		$MultipleOf3e5 = new MultipleOf3e5(15);


		$this->assertEquals(true, $MultipleOf3->isMultiple());
		$this->assertEquals(true, $MultipleOf5->isMultiple());
		$this->assertEquals(true, $MultipleOf3e5->isMultiple());
	}

	function testIsNotMultiple() {

		$MultipleOf3 = new MultipleOf3(22);

		$MultipleOf5 = new MultipleOf5(73);

		$MultipleOf3e5 = new MultipleOf3e5(20);

		$this->assertEquals(false, $MultipleOf3->isMultiple());
		$this->assertEquals(false, $MultipleOf5->isMultiple());
		$this->assertEquals(false, $MultipleOf3e5->isMultiple());
	}


}