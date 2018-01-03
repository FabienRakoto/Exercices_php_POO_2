<?php

namespace App\Table;

use App\App;

class Table {

	protected static $table ;

	public static function find ($id) {
		// idem que pour la fonction all(). attention query c'est une fonction maison
		return App::getDb()->prepare("
			SELECT *
			FROM " . static::$table . "
			WHERE id = ?
		", [$id], get_called_class(), true);
	}

	public static function query ($statement, $attributes = null, $one = false) {

		if($attributes) {

			return App::getDb()->prepare($statement, $attributes, get_called_class(), $one) ;

		} else {

			return App::getDb()->query($statement, get_called_class(), $one) ;

		}

	}

	public static function all() {
		// attention query c'est une fonction maison
		return App::getDb()->query("
			SELECT *
			FROM " . static::$table . "
		", get_called_class()) ;

	}

	// la fonction magique __get
	public function __get($key) {
		// la méthode c'est 'get' suivi de la clé, ici 'url', à laquelle on aura rajouté une majuscule devant
		$method = 'get'. ucfirst($key) ;
		$this->$key = $this->$method();
		return $this->$key;
	}

}

