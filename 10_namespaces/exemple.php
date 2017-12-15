<?php

// namespace Tutoriel;

use \Tutoriel\Personnage;
use \Tutoriel\Archer;
use \Tutoriel\Autoloader;

require 'class/Autoloader.php';
Autoloader::register();

$merlin = new Personnage('Merlin');

$harry = new Personnage ('Harry');

$legolas = new Archer ('Legolas', 7);

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);