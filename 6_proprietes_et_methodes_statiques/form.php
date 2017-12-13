<?php

/**

 * Class Form

 * Permet de générer un formulaire rapidement et simplement

 */


class Form {

	/**

 	 * @var array Données utilisées par le formulaire

 	 */

	private $data;

	/**

 	 * @var string Tag utilisé pour entourer les champs

 	 */

	public $surround = 'p';

	/**

 	 * @param array $data Données utilisées par le formulaire

 	 */

	public function __construct($data = array()) {
		$this->data = $data;
	}

	/**

 	 * @param $html string Code HTML à entourer

 	  * @return string

 	  */

	public function surround($html) {
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}

	/**

 	 * @param $index string Index de la valeur à récupérer

 	  * @return string

 	  */

	// ternaire
	private function getValue($index) {
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}


	/**

 	 * @param $name string 

 	  * @return string

 	  */

	public function input($name) {
		return $this->surround(
			'<input type="text" name="' . $name . '" value="
				' . $this->getValue($name) . '
			">'
		);
	}

	public function submit() {
		return $this->surround('<button type="submit">Envoyer</button>');
	}
}

