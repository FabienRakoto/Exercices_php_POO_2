<?php

class Personnage {
	
	private $vie = 80;
	private $atk = 20;
	private $nom;
	// protected, c'est comme private, mais accessible depuis une classe fille. 

	public function __construct($nom){
		$this->nom = $nom;
	}

	// setter
	public function setNom($nom) {
		$this->nom = $nom;
	}

	//getter 
	public function getNom(){
		return $this->nom ;
	}

	public function getVie(){
		return$this->vie;
	}

	public function getAtk(){
		return$this->atk;
	}

	public function regenerer ($vie = null){
		if (is_null($vie)){
			$this->vie = 100;
		} else {
			$this->vie += $vie;
		}
	}

	public function mort(){
		return $this->vie <= 0;
	}

	public function crier(){
		echo 'LEEROY JENKINS !';
	}

	private function empecher_negatif(){
		if($this->vie < 0){
			$this->vie = 0;
		}
	}

	public function attaque($cible){ 
		$cible->vie = $cible->vie - $this->atk;
		var_dump($cible);
		$cible->empecher_negatif();
	}

}