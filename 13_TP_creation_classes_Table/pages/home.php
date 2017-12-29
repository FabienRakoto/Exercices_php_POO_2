<h1>Journal de bord d'une codeuse php</h1>
<br />
<br />

<div class="row">

	<div class="col-sm-8">
 
		<ul>
			<?php
				// en se basant sur la fonction query($statement, $class_name), on fait une boucle :
				foreach(App\Table\Article::getLast() as $post): ?>

				<li>

					<!-- <?php var_dump($post); ?> -->

					<h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>
					<p><em><?= $post->categorie ?></em></p>

					<p><?= $post->extrait ?></p>
						
				</li>

			<?php endforeach; ?> 

		</ul>

	</div>	

	<div class="col-sm-4">

		<?php foreach(App\Table\Categorie::all() as $categorie): ?>

		<ul>

			<li>
				<a href = "<?= $categorie->url; ?>"><?= $categorie->titre; ?></a>
			</li>

		</ul>

		<?php endforeach; ?> 

	</div>	

</div>


