<?php
require 'partials/header.php';
require 'partials/welcome.php';
?>
<!-- noticias -->
<section class="section-news">
	<h5>Noticias</h5>
	<div class="container-flex">
		<div class="card">
			<img class="card__img-news" src="/assets/img/news/no-hay-clases.png" alt="">
			<p class="card__p-title card__p-news">title</p>
			<p class="card__p-time card__p-news">mayo 17,2023</p>
			<p class="card__p-info card__p-news">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum reiciendis nesciunt maxime optio odit explicabo nobis! Omnis dolore praesentium aperiam.</p>
		</div>
	</div>
	<a class="section-news__a-info" href="/publicaciones">+ Noticias</a>
</section>

<section class="secton-history">
	<h5>Historia</h5>
	<div class="container-flex">
		
	</div>
</section>

<section class="section-basic-cycle">
	<div class="bg-color"></div>
	<h4 class="section-basic-cycle__h4">Talleres de ciclo básico</h4>
	<a href="/ciclo-basico" class="section-basic-cycle__div-age">
		<p class="section-basic-cycle__p-age">1°año</p>
		<p class="section-basic-cycle__p-age">2°año</p>
		<p class="section-basic-cycle__p-age">3°año</p>
	</a>
</section>
<section class="card-one">
	<h1 class="card__h1">Tecnicaturas</h1>
	<p class="card__p-subtitle">Ciclo supeior a partir de 4<sup>to</sup> año</p>

	<div class="container-cards">
		<div class="container-card">
			<div class="card">
				<img class="card__img" src="/assets/img/tecnicaturas/adm-de-empresas.jpg" alt="">
				<h2 class="card__h2">Adm de Empresas</h2>
				<div class="container-info">
					<p class="card__p">El técnico en administración de empresas estara capacitado para la gestión organizacional y comprender las actividades que hacen al desarrollo de tareas y toma de decisiones programadas, relacionadas con las operaciones de compra y venta, gestión de los recursos humanos, gestión de los fondos y el registro contable. Además, está capacitado para colaborar con algunas actividades relacionadas con la planificación y control... organizacional conforme se explicita en el perfil profesional.</p>
				</div>
				<a class="card__a" href="/admdeempresas">
					<button class="card__a-button">
						<span class="button__span">+ Info</span>
					</button>
				</a>
			</div>
		</div>
		<div class="container-card">
			<div class="card">
				<img class="card__img" src="/assets/img/tecnicaturas/computacion.jpg" alt="">
				<h2 class="card__h2">Computación</h2>
				<div class="container-info">
					<p class="card__p">El Técnico en Computación estará capacitado para asistir al usuario de productos y servicios informáticos brindándole servicios de instalación, capacitación, sistematización, mantenimiento primario, resolución de problemas derivados de la operatoria, y apoyo a la contratación de productos o servicios informáticos, desarrollando las actividades descriptas en su perfil profesional y pudiendo actuar de nexo entre el especialista...</p>
				</div>
				<a class="card__a" href="/computacion">
					<button class="card__a-button">
						<span class="button__span">+ Info</span>
					</button>
				</a>
			</div>
		</div>
		<div class="container-card">
			<div class="card">
				<img class="card__img" src="/assets/img/tecnicaturas/gastronomia.jpg" alt="">
				<h2 class="card__h2">Gastronomía</h2>
				<div class="container-info">
					<p class="card__p">El Técnico en Gastronomía está capacitado para desarrollar los procesos de pre elaboración, preparación y conservación de elaboraciones culinarias básicas y avanzadas, aplicando con autonomía las técnicas correspondientes, consiguiendo la calidad y estructuras de sabor de las principales gastronomías locales, regionales, nacionales e internacionales...</p>
				</div>
				<a class="card__a" href="/gastronomia">
					<button class="card__a-button">
						<span class="button__span">+ Info</span>
					</button>
				</a>
			</div>
		</div>
	</div>
</section>
<?php require 'partials/footer.php';
