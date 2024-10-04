<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E.E.T N°2 Independencia - admin</title>
	<link rel="stylesheet" href="/assets/css/login.css">
	<meta name="description" content="Sitio administrador para la web de la Escuela Técnica N°2 Independencia">
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<meta name="google" content="notranslate">
	<meta name="language" content="Spanish">
	<meta name="author" content="E.E.T N°2 Independencia">
</head>

<body>
	<?php include 'partials/loginheader.php' ?>
	<section class="section">
		<form class="section__form" action="/login" method="post">
			<input class="section__input" type="email" name="email" autocomplete="off" placeholder="Correo electronico">
			<input class="section__input"  type="password" name="password" autocomplete="off" placeholder="Contraseña">
			<input class="section__input section__input--submit" type="submit" value="Iniciar">
		</form>
	</section>
	<?php if (!empty($error)): ?>
		<p><?= $error ?></p>
	<?php endif ?>
</body>

</html>
