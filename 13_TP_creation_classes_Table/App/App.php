<?php

namespace App;

class App {

	// Cte
	const DB_NAME = 'TP_blog_grafikart';
	const DB_USER = 'root';
	const DB_PASS = 'root';
	const DB_HOST = 'localhost';

	// variable qui permet de sauvegarder la connexion à la base de données
	private static $database ;

	// getter
	public static function getDb(){
		
		if (self::$database === null) {

			// initialisation de l'objet base de données
			self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST) ;
		
		}

		return self::$database;
		
	}

	public static function notFound() {
		header("HTTP/1.0 404 Not Found") ;
		header('Location:index1.php?p=404');
	}

}