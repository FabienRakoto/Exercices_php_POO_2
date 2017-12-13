<?php
class Personnage {
	protected $vie = 80;
	protected $atk = 20;
	protected $nom;

	public function __construct($nom){
		$this->nom = $nom;
	}

	public function mort(){
		return $this->vie <= 0;
	}

	public function crier(){
		echo 'LEEROY JENKINS !';
	}

	public function regenerer($vie = null){
		if (is_null($vie)){
			$this->vie=100;
		} else {
			$this->vie = $this->vie + $vie;
		}
	}
	// interrogation : comment la fonction comprend-elle ce qu'est la variavle $vie, pourtant définie à l'extérieur ? pourquoi ne faut-il pas mettre ici $this->vie ?

	public function attaque($cible){
		// $this c'est l'attaquant 
		$cible->vie = $cible->vie - $this->attaque;
		//$cible->vie = 20;
		var_dump($cible);

	}
}