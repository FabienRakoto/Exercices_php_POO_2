<?php

use App\Table\Categorie;
use App\Table\Article;

// la fonction find(); a été créée dans la classe Table
$categorie = Categorie::find($_GET['id']);

// var_dump($categorie);

$articles = Article::lastByCategory($_GET['id']); 

$categories = Categorie::all();

?>