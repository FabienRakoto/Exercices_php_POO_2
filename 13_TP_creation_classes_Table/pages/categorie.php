<?php

use App\Table\Categorie;
use App\Table\Article;

// la fonction find(); a été créée dans la classe Table
$categorie = Categorie::find($_GET['id']);
// var_dump($categorie);
if($categorie ==false) {
	\App\App::notFound();
}

$articles = Article::lastByCategory($_GET['id']); 

$categories = Categorie::all();

?>

<h1>Les articles de la catégorie <?= $categorie->titre ?></h1>
<br />
<br />

<div class="row">

	<div class="col-sm-8">
 
		<ul>
			<?php
				// en se basant sur la fonction query($statement, $class_name), on fait une boucle :
				foreach ($articles as $post): ?>

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

		<h5>Catégories</h5>

		<?php foreach(App\Table\Categorie::all() as $categorie): ?>

		<ul>

			<li>
				<a href = "<?= $categorie->url; ?>"><?= $categorie->titre; ?></a>
			</li>

		</ul>

		<?php endforeach; ?> 

	</div>	

</div>