<h1>Journal de bord d'un naufragé</h1>
<br />
<br />
 
<ul>
	<?php
		// en se basant sur la fonction query($statement, $class_name), on fait une boucle :
		foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>

		<li>

			<!-- <?php var_dump($post); ?> -->

			<h2><a href="<?= $post->getURL(); ?>"><?= $post->titre; ?></a></h2>

			<p><?= $post->getExtrait(); ?></p>
				
		</li>



	<?php endforeach; ?>
</ul>



