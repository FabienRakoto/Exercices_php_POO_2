<h1>Journal de bord d'une codeuse php</h1>
<br />
<br />
 
<ul>
	<?php
		// en se basant sur la fonction query($statement, $class_name), on fait une boucle :
		foreach(App\Table\Article::getLast() as $post): ?>

		<li>

			<!-- <?php var_dump($post); ?> -->

			<h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

			<p><?= $post->extrait ?></p>
				
		</li>



	<?php endforeach; ?>
</ul>



