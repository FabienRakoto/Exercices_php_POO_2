<?php

class Archer extends Personnage {

	public $vie = 40;

	public function __construct($nom, $vie) {
		parent::__construct ($nom);
	}


	public function attaque($cible){
		// $this c'est l'attaquant 
		$cible->vie = $cible->vie - 2* $this->atk;
		//$cible->vie = 20;
		var_dump($cible);

	}


}