<!-- Header -->
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> Academia Araçatubense de Letras</p>
		</div>
	</div>
</header>

<!-- Nav -->
<nav id="nav">
	<ul>
		<li class="current"><a href="<?= arquivo('index.php')?>">Home</a></li>
		<li>
			<a href="#">Quem Somos?</a>
			<ul>
				<li><a href="<?= arquivo('modulos/modulos-site/historia.php')?>">Nossa história</a></li>
				<li><a href="<?= arquivo('modulos/modulos-site/membros.php')?>">Membros</a></li>

				<li><a href="<?= arquivo('modulos/modulos-site/linha.tempo.php')?>">Linha do tempo</a></li>
			</ul>
		</li>
		<li><a href="<?= arquivo('modulos/modulos-site/colecao.php')?>">coleção</a></li>
		<li><a href="<?= arquivo('modulos/modulos-site/publicacao.php')?>">publicações</a></li>
		<li><a href="<?= arquivo('modulos/modulos-site/noticias.php')?>">notícias</a></li>

	</ul>
</nav>