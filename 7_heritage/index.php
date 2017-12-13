<?php
require 'personnage.php';
require 'archer.php';

$merlin = new Personnage("Merlin");

$harry= new Personnage("Harry");

$legolas = new Archer('Legolas', 5);

echo '<pre>';

var_dump($merlin, $harry, $legolas);

$legolas->attaque($harry); 

