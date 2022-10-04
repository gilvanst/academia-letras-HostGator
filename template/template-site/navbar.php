<!-- Header -->
<?php
	$pagina_atual = $_SERVER['PHP_SELF'];
	$pagina_atual = explode('/', $pagina_atual);
	$pagina_atual = $pagina_atual[count($pagina_atual) - 1];
?>

<!-- Nav -->
<nav id="nav">
	<ul>
		<li class="<?= $pagina_atual == 'index.php' ? 'current' : '' ?>"><a href="<?= arquivo('index.php')?>">Home</a></li>

		<li class="<?= $pagina_atual == 'historia.php' ? 'current' : '' ?>">
			<a href="#">Quem Somos?</a>
			<ul>
				<li><a href="<?= arquivo('modulos/modulos-site/historia.php')?>">Nossa história</a></li>
				<li><a href="<?= arquivo('modulos/modulos-site/membros.php')?>">Membros</a></li>

				<li><a href="<?= arquivo('modulos/modulos-site/linha.tempo.php')?>">Linha do tempo</a></li>
			</ul>
		</li>

		<li class="<?= $pagina_atual == 'colecao.php' ? 'current' : '' ?>"><a href="<?= arquivo('modulos/modulos-site/colecao.php')?>">coleção</a></li>
		<li class="<?= $pagina_atual == 'publicacao.php' ? 'current' : '' ?>"><a href="<?= arquivo('modulos/modulos-site/publicacao.php')?>">publicações</a></li>
		<li class="<?= $pagina_atual == 'noticias.php' ? 'current' : '' ?>"><a href="<?= arquivo('modulos/modulos-site/noticias.php')?>">notícias</a></li>

	</ul>
</nav>