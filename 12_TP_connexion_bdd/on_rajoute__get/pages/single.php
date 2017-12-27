<?php 

// moi je ferais comme ça mais Grafikart dis que ce serait la fête aux injections SQL, je risquerais de me faire pirater
// $post =  $db->query('SELECT * FROM articles WHERE id = ' . $_GET['id']); 

// mieux vaut faire une requête préparée :
$post = $db->prepare ('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article');

// var_dump($post);
?>
<h1><?= $post[0]->titre; ?></h1>

<p><?= $post[0]->contenu; ?></p>

