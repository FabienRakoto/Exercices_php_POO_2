<?php

require '../app/autoloader.php';

// permet de relancer et gérer automatiquement l'autolo
APP\Autoloader::register();

if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'home';
}


// plutôt que de require ma page, je voudrais l'exécuter et stocker le résultat dans la variable $content
// C'est ce que fait la fonction ob_start();
ob_start();
if ($p === 'home') {
	require '../pages/home.php';
} elseif ($p === 'article') {
	require '../pages/single.php';
} elseif ($p === 'categorie') {
	require '../pages/categorie.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php' ;