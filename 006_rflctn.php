<?php

class Base {
	public function sayHello() {
		echo 'Hallo ';
	}
}

trait SayWorld {
	public function sayHello() {
		parent::sayHello();
		echo 'Welt!';
	}
}

class MyHelloWorld extends Base {
	use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

?>