<?php

namespace App\Table;

use App\App;

class Article {

	public static function getLast() {
		// attention query c'est une fonction maison
		return App::getDb()->query("
			SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie 
			FROM articles 
			LEFT JOIN categories 
				ON category_id = categories.id
		", __CLASS__) ;
	}

	// la fonction magique __get
	public function __get($key) {
		// la méthode c'est 'get' suivi de la clé, ici 'url', à laquelle on aura rajouté une majuscule devant
		$method = 'get'. ucfirst($key) ;
		$this->$key = $this->$method();
		return $this->$key;
	}

	public function getUrl() {

		return 'index1.php?p=article&id=' . $this->id;
	}

	public function getExtrait () {
		$html = '<p>' . substr($this->contenu, 0, 15) . ' ...</p>';
		$html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
		return $html;
	}

}