<?php require 'partials/header.php'; ?>

<section class="section-one">
	<div class="container-text">
		<h1 class="container-text__h1">Contactanos</h1>
	</div>
	<div class="section-one__div-school">
		<img class="div-school__img" src="/favicon.ico" alt="Logo de la escuela técnica 2 Independencia">
	</div>
</section>

<article class="article-form">
	<p class="article-form__p">Si tienes alguna consulta o dudas, no dudes en contactarnos</p>
	<form class="form">
		<div class="form__div">
			<label for="name" class="form__label">Nombre</label>
			<input type="text" name="name" id="name" class="form__input">
		</div>
		<div class="form__div">
			<label for="email" class="form__label">Email</label>
			<input type="email" name="email" id="email" class="form__input">
		</div>
		<div class="form__div">
			<label for="message" class="form__label">Mensaje</label>
			<textarea name="message" id="message" cols="30" rows="10" class="form__textarea"></textarea>
		</div>
		<div class="form__div">
			<button type="submit" class="form__button" value="">Enviar</button>
		</div>
	</form>
</article>

<?php require 'partials/footer.php'; ?>
