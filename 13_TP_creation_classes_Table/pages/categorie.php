<?php

use App\Table\Categorie;
use App\Table\Article;


$categorie = Categorie::find($_GET['id']);

// var_dump($categorie);

$articles = Article::lastByCategory($_GET['id']); 

$categories = Categorie::all();

?>