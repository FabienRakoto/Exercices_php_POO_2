<?php

namespace App;

use \PDO;
use App\table;

Class Database {
	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;

	public function __construct($db_name, $db_user = 'root', $db_pass='root', $db_host = 'localhost'){
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;

	}

	private function getPDO(){
		if ($this->pdo === null) {
			// $pdo =new PDO ('mysql:dbname=TP_blog_grafikart; host=localhost', 'root', 'root') ;
			// Normalement on ne devrait pas le renseigner en dur mais avec le constructeur. J'ai essayé ci-dessous mais ça ne marche pas :
			$pdo = new PDO ('mysql:dbname='.$this->db_name.'; host='.$this->db_host, $this->db_user, $this->db_pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
		}
	
		return $this->pdo;
	}

	public function query($statement, $class_name) {
		// getter
		$req = $this->getPDO()->query($statement);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
		return $datas;
	}

	public function prepare($statement, $attributes, $class_name) {
			$req = $this->getPDO()->prepare($statement);
			$req->execute($attributes);
			$datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
			return $datas;
	}

	
}

// ici $statement = 'SELECT * FROM articles'