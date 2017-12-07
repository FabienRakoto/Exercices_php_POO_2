<?php
require 'personnage.php';

echo "<br /> Créons une instance de la classe Personnage dont le nom est Merlin, et affichons l'objet : <br />";
$merlin = new Personnage("Merlin");
$merlin->nom = "Merlin";
var_dump($merlin);

echo "<br /><br /> Voilà ce qui se passe quand Merlin crie : <br />";
$merlin->crier();

echo "<br /><br /> Afichons les points de vie de Merlin : <br /><";
var_dump($merlin->vie);

$merlin->regenerer(20);
echo "<br /><br /> Maintenant que Merlin s'est régénéré, affichons ses points de vie : <br />";
var_dump($merlin->vie);

echo "<br /><br /> Créons Harry et affichons l'objet Merlin, instance de la classe Personnage : <br />";
$harry= new Personnage("Harry");
$harry->nom = "Harry";
var_dump($merlin);

echo "<br /><br /> Affichons l'objet Harry, instance de la classe Personnage : <br />";
var_dump($harry);

echo "<br /><br /> Réduisons les points de vie de Harry à zéro : <br />";
$harry->vie = 0;
var_dump($harry->mort());
echo "<br /> Si Harry est mort, ça doit nous mettre true ci-dessus. <br /><br />";


$merlin->regenerer(5);

$harry->regenerer();

echo "<br /> " . var_dump($merlin);

echo "<br /> " . var_dump($harry);

echo "<br /> Merlin attaque Harry de 20. <br />" ;


$merlin->attaque($harry);
echo "<br /> Merlin attaque Harry de 20. <br />" ;
$merlin->attaque($harry);
echo "<br /> Merlin attaque Harry de 20. <br />" ;
$merlin->attaque($harry);
echo "<br /> Merlin attaque Harry de 20. <br />" ;
$merlin->attaque($harry);
echo "<br /> Merlin attaque Harry de 20. <br />" ;
$merlin->attaque($harry);

echo "<br />";
echo "<br />";
var_dump($harry->mort());
echo "<br /> Si Harry est mort, ça doit nous mettre true ci-dessus. <br /><br />";

if($harry->mort()){
	echo "<br /> Harry est mort ;(";
} else {
	echo "<br /> Harry a survecu, ouf. ";
}


