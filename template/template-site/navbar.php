<!-- Header -->
<?php
$pagina_atual = $_SERVER['PHP_SELF'];
$pagina_atual = explode('/', $pagina_atual);
$pagina_atual = $pagina_atual[count($pagina_atual) - 1];
?>

<!-- Nav -->
<nav id="nav">
	<ul>
		<li class="<?= $pagina_atual == 'index.php' ? 'current' : '' ?>"><a href="<?= arquivo('index.php') ?>">Home</a></li>

		<li class="<?= $pagina_atual == 'historia.php' ? 'current' : '' ?>">
			<a href="<?= arquivo('modulos/modulos-site/historia/historia.php') ?>">Quem Somos?</a>
			<ul>
				<li><a href="<?= arquivo('modulos/modulos-site/historia/historia.php') ?>">Nossa história</a></li>
				<li><a href="<?= arquivo('modulos/modulos-site/membros/membros.php') ?>">Membros</a></li>

				<li><a href="<?= arquivo('modulos/modulos-site/memorial/memorial.php') ?>">Memorial</a></li>
			</ul>
		</li>


		<li class="<?= $pagina_atual == 'colecao.php' ? 'current' : '' ?>"><a href="<?= arquivo('modulos/modulos-site/obra/colecao.php') ?>">obras</a></li>
		<li class="<?= $pagina_atual == 'publicacao.php' ? 'current' : '' ?>"><a href="<?= arquivo('modulos/modulos-site/publicacao/publicacao.php') ?>">publicações</a></li>
		<li class="<?= $pagina_atual == 'noticias.php' ? 'current' : '' ?>">
			<a href="<?= arquivo('modulos/modulos-site/noticias/noticias.php') ?>">Eventos</a>
			<ul>
				<li><a href="<?= arquivo('modulos/modulos-site/videos/videos.php') ?>">Videos</a></li>
			</ul>

		</li>
		<li class="<?= $pagina_atual == 'revista.php' ? 'current' : '' ?>"><a href="<?= arquivo('modulos/modulos-site/revista/revista.php') ?>">revista</a></li>

	</ul>
</nav>