<?php

class BaseClass {
	function __construct() {
		echo "Im base Class \n";
	}
}

class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();
		echo "in Subsclass \n";
	}
}

class OtherSubClass extends BaseClass {
	// an other subclass
}

$obj = new BaseClass();

$obj = new SubClass();

$obj = new OtherSubClass();

?>