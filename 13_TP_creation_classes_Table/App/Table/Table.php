<?php

namespace App\Table;

use App\App;

class Table {

	protected static $table ;

	private static function getTable() {

		if (static::$table === null) {

			$class_name = explode ("\\", get_called_class());

			static::$table = strtolower(end($class_name)) . 's' ;

			// die(self::$table);

		} else {

			die(static::$table);

			return static::$table ;
		}

	}

	public static function all() {
		// attention query c'est une fonction maison
		return App::getDb()->query("
			SELECT *
			FROM " . static::getTable() . "
		", __CLASS__) ;

	}

	// la fonction magique __get
	public function __get($key) {
		// la méthode c'est 'get' suivi de la clé, ici 'url', à laquelle on aura rajouté une majuscule devant
		$method = 'get'. ucfirst($key) ;
		$this->$key = $this->$method();
		return $this->$key;
	}

}

