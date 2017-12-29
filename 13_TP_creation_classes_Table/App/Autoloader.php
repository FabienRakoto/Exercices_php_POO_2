<?php

namespace App;

/**
 * Class Autoloader
 * @package Tutoriel
 */

class Autoloader {

	/**
	 * Enregistre notre autoloader
	 */
	static function register () {
		spl_autoload_register(array(__CLASS__, 'autoload' ));
	}

	/**
	 * Inclut le fichier correspondant à notre classe
	 * @param $class string Le nom de la classe à charger
	 */
	static function autoload ($class) {
		// On peut optimiser l'autoloader pour dire "n'autoloade que les trucs qui commencent par le namespace Tutoriel". Il faut que le nom de la classe commence par Tutoriel => il faut que la classe et le namespace soient en position zéro
		if(strpos($class, __NAMESPACE__ . '\\') === 0) {
			// var_dump ($class_name);
			$class = str_replace(__NAMESPACE__ . '\\', '', $class);
			$class = str_replace('\\', '/', $class);
			// var_dump($class);
			require __DIR__ . '/' . $class . '.php';
		}
	}
}

