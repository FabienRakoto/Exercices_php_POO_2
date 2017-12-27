<?php

namespace App\Table;

class Article {

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