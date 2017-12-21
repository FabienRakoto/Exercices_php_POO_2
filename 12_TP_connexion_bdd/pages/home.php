<?php

$pdo = new PDO ('mysql:dbname=TP_blog_grafikart; host=localhost', 'root', 'root');

// die (var_dump(PDO::ATTR_ERRMODE));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// exec ça exécute une requête SQL et ça nous retourne le nombre de lignes affectées
$count = $pdo->exec('INSERT INTO articles SET titre = "Mon titre", date = " ' . date('Y-m-d H:i:s') . ' " ');
var_dump($count);


