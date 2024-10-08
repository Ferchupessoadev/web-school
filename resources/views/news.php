<?php
require 'partials/header.php';
?>

<section class="section-one">
	<div class="container-text">
		<h1 class="container-text__h1">Noticias</h1>
	</div>
	<div class="section-one__div-school">
		<img class="div-school__img" src="/favicon.ico" alt="Logo de la Escuela Técnica 2 Concordia">
	</div>
</section>

<section class="section-posts">
	<div class="section-posts__cards">
		<a class="cards__card" href="/">
			<img class="card__img" src="/assets/img/banner.jpg" alt="Logo de la Escuela Técnica 2 Concordia">
			<div class="card__text">
				<h2 class="text__h2">Noticia 1</h2>
				<p class="text__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quidem.</p>
			</div>
		</a>
		<a class="cards__card" href="/">
			<img class="card__img" src="/assets/img/banner.jpg" alt="Logo de la Escuela Técnica 2 Concordia">
			<div class="card__text">
				<h2 class="text__h2">Noticia 2</h2>
				<p class="text__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quidem.</p>
			</div>
		</a>
	</div>
</section>

<?php
require 'partials/footer.php';
?>
