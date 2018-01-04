<?php 
use App\App;
use App\Table\Categorie;
use App\Table\Article;
// moi je ferais comme ça mais Grafikart dis que ce serait la fête aux injections SQL, je risquerais de me faire pirater
// $post =  $db->query('SELECT * FROM articles WHERE id = ' . $_GET['id']); 

// mieux vaut faire une requête préparée :
$post = Article::find($_GET['id']);
if($post=== false) {
	App::notFound();
}

App::setTitle($post->titre);

// Avant j'avais : $categorie = Categorie::find($post->category_id)

// var_dump($post);
?>

<h1><?= $post->titre; ?></h1>

<!-- Avant j'avais : <p><em><?= $categorie->titre; ?></em></p> -->
<p><em><?= $post->categorie; ?></em></p>

<p><?= $post->contenu; ?></p>

