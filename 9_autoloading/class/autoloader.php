<?php

class Autoloader{

	static function autoload($class_name) {
	require 'class/' . $class_name . '.php';
	}

}

