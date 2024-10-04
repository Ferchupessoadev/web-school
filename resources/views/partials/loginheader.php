<header class="header">
	<img class="header__logo" src="/favicon.ico" alt="">
	<nav class="nav">
		<ul class="nav__ul">
			<li><a href="/">Home</a></li>
			<li>
				<a href="/publicaciones">Posts</a>
			</li>
			<li>
				<?php if (!empty($_SESSION)): ?>
					<a href="/logout">logout</a>
				<?php endif; ?>
			</li>
		</ul>
	</nav>
</header>
