<?php

function __autoload($name) {
	echo "Möchte $name laden. \n";
	throw new Exception("Kann $name nicht laden.");

}

try {

	$obj = new NonLoadableClass();
} catch (Exception $e ){
	echo $e->getMessage(), "\n";
	

}

?>