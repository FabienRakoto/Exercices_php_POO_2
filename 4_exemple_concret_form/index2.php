<?php

require 'form.php';

$form = new Form (array(
	'username' => 'Roger'
));

// echo "<pre>";
// var_dump($form-);
// die();

echo $form->input('username') ;

echo $form->input('password') ;

echo $form->submit();


$form = new Form ();

echo $form->input('bidule');

echo $form->input('machin');

echo $form->submit();
