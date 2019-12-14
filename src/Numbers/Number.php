<?php

namespace StarCorp\Numbers;

interface Number {

	function __construct($number);
	function isMultiple();
	function toString();
}