<?php
require 'personnage.php';

$merlin = new Personnage ("Merlin");
$harry = new Personnage ("Harry");

$merlin->setNom("Jamboneau");

echo $merlin->getNom() . "<br />";

echo var_dump ($merlin->getAtk()) . "<br />";

echo var_dump ($merlin->getVie()) . "<br />";

