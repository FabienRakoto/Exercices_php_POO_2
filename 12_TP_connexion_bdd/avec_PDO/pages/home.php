<?php

$pdo = new PDO ('mysql:dbname=TP_blog_grafikart; host=localhost', 'root', 'root');

// Pour faire du error reporting, et throw exceptions :
// die (var_dump(PDO::ATTR_ERRMODE)); pour bien voir que c'est un entier
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// exec ça exécute une requête SQL et ça nous retourne le nombre de lignes affectées
// ci-dessous on va créer des articles 
// $count = $pdo->exec('INSERT INTO articles SET titre = "Mon titre", date = " ' . date('Y-m-d H:i:s') . ' " ');
// var_dump($count);

// query ça permet non pas de compter mais bien de récupérer le résultat de la requête
$res = $pdo->query('SELECT * FROM articles');
// var_dump($res);
// query c'est un PDO statement, dont l'une des fonctions est fetchAll, qui permet de récupérer tous les résultats
// echo '<pre>';
// var_dump($res->fetchAll(PDO::FETCH_OBJ)) ;
// pour info : std class c'est une classe vide en php, c'est comme si on créait un objet par défaut en javascript

$datas = $res->fetchAll(PDO::FETCH_OBJ);
var_dump ($datas[0]->titre);



