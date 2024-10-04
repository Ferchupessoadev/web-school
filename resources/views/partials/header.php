<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $title ?>
	</title>
	<meta name="description" content="<?= $description ?>">
	<meta name="og:title" content="<?= $title ?>">
	<meta name="og:description" content="<?= $description ?>">
	<meta name="og:image" content="/favicon.ico">

	<link rel="icon" href="/favicon.ico">
	<!-- Font Oswald -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Indic+Siyaq+Numbers&family=Noto+Sans+Math&family=Oswald:wght@500&display=swap" rel="stylesheet">
	<!-- Font Roboto slab -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Indic+Siyaq+Numbers&family=Noto+Sans+Math&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
	<!-- CSS Custom -->
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/f845b9182b.js" crossorigin="anonymous"></script>
	<!-- libreria animate.css -->
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="body">
	<!-- barra de navegación - escritorio -->
	<nav class="nav">
		<img src="/favicon.ico" alt="Escuela tecnica 2 Independencia">
		<ul class="nav__ul">
			<li class="nav__li"><a href="/" class="nav__li-a">Inicio</a></li>
				<li class="nav__li"><a href="/publicaciones" class="nav__li-a">Noticias</a></li>
			<li class="nav__li"><a href="/formacion-profesional" class="nav__li-a">Formación profesional</a></li>
			<li class="nav__li nav__li-tecnicaturas">
				<a class="nav__li-a" href="#">Tecnicaturas <p class="arrow-rotate">&#60</p></a>
				<ul class="events-ul">
					<li class="events-ul__li"><a class="events-ul__li-a" href="/computacion">Computación</a></li>
					<li class="events-ul__li"><a class="events-ul__li-a" href="/admdeempresas">Adm. de Empresas</a></li>
					<li class="events-ul__li"><a class="events-ul__li-a" href="/gastronomia">Gastronomía</a></li>
				</ul>
			</li>
			<li class="nav__li"><a href="/contactanos" class="nav__li-a">Contactanos</a></li>
		</ul>
	</nav>
	<!-- barra de navegación - telefono -->
	<nav class="nav-responsive">
		<h1 class="nav__h1-responsive">E.E.T.N°2 "Independencia"</h1>
		<div class="nav-responsive__nav-btn"><i class="fa-solid fa-bars"></i><i class="fa-solid fa-x btn-x-nav" style="font-family: monospace;"></i></div>
		<ul class="nav__ul-responsive" id="navResponsive">
			<li class="nav__li-responsive"><a href="/" class="nav__li-a-responsive">Inicio</a></li>
				<li class="nav__li-responsive"><a href="/publicaciones" class="nav__li-a-responsive">Noticias</a></li>
			<li class="nav__li-responsive"><a href="/formacion-profesional" class="nav__li-a-responsive">Formación profesional</a></li>
			<li class="nav__li-responsive nav__li-tecnicaturas">
				<a class="nav__li-a-responsive" href="#">Tecnicaturas <p class="arrow-rotate">&#60</p></a>
			</li>
			<li class="nav__li-responsive"><a href="./public/incripcion.html" class="nav__li-a-responsive">Incripción 2023</a></li>
			<li class="nav__li-responsive"><a href="/contactanos" class="nav__li-a-responsive">Contactanos</a></li>
		</ul>
	</nav>
