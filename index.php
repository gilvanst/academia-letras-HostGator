
<?php

include 'config.php';


?>
<!DOCTYPE HTML>
<html>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
			<p> Academia Araçatubense de Letras</p>
		</div>
	</div>
</header>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<?php include_once path('template/template-site/navbar.php'); ?>



		<!-- Banner -->
		<!-- Main -->


		<section id="main">
			<div class="container">
				<div class="row gtr-200">
					<div class="col-12">

						<article class="box page-content">

							<?php
							$sql = "SELECT * FROM historia ORDER BY idHis ";
							$historias = retornaDados($sql);

							foreach ($historias as $historia) { ?>
								<section>
									<h3><a href="<?= arquivo("modulos/modulos-site/historia/historia.php") ?>" class="button2">Quem somos?</a></h3>
									<p> <?= substr($historia['texto'], 0, 499) ?>...</p>
								</section>

						</article>
					<?php } ?>

					<!-- Features -->
					<div class="col-12">

						<!-- Blog -->
						<section class="box blog">
							<h2 class="major titulo-hover"><a href="<?= arquivo("modulos/modulos-site/noticias/noticias.php") ?>"><span>notícias e eventos</span></a></h2>
							<div>
								<div class="row">
									<div class="col-9 col-12-medium">
										<div class="content">
											<?php
											$sql = "SELECT * FROM eventos ORDER BY idEve DESC LIMIT 1";
											$eventos = retornaDados($sql);


											foreach ($eventos as $evento) { ?>
												<!-- Featured Post -->
												<article class="box post">
													<header>
														<h3><a href="#"><?= $evento['nomeEve'] ?></a></h3>
														<ul class="meta">
															<li class="icon fa-clock"><?= $evento['dataEve'] ?></li>
															<li class="icon fa-comments"><?= $evento['horaEve'] ?></a></li>
														</ul>
													</header>
													<a href="modulos/modulos-site/noticias/visualizar.php?idEve=<?= $evento['idEve'] ?>" class="image featured"><img src="<?= arquivo('img/' . $evento['imagemEve']) ?>" alt="evento" /></a>
													<p>
														<?= $evento['descricaoEve'] ?>
													</p>
													<div class="text-right"></div>
													<a href="modulos/modulos-site/noticias/noticias.php" class="button">Ver mais</a>
												</article>

										</div>
									</div>
									<div class="col-3 col-12-medium mt-3">
										<div class="sidebar">

											<!-- Archives -->
											<ul class="divided">
												<li>
													<article class="box post-summary">
														<h3><a href="<?= arquivo('modulos/modulos-site/revista/revista.php') ?>">Revista Plural</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">6 hours ago</li>
															<li class="icon fa-comments"><a href="#">34</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="<?= arquivo('modulos/modulos-site/videos/videos.php') ?>">Nossos Videos</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">9 hours ago</li>
															<li class="icon fa-comments"><a href="#">27</a></li>
														</ul>
													</article>
												</li>



											</ul>


										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</section>

					</div>
					<div class="col-12">

						<section class="box features">
							<h2 class="major titulo-hover"><a href="<?= arquivo("modulos/modulos-site/obra/colecao.php") ?>"><span>Coleção</span></a></h2>
							<div>
								<div class="row">
									<?php
									$sql = "SELECT * FROM obra ORDER BY idObra DESC LIMIT 4";
									$obras = retornaDados($sql);

									foreach ($obras as $obra) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<a href="modulos/modulos-site/obra/visualizar.php?idObra=<?= $obra['idObra'] ?>" class="image featured">
													<img src="<?= arquivo('img/' . $obra['imagemObra']) ?>" alt="" />
												</a>

												<h3><a class="titulo-hover" href="modulos/modulos-site/obra/visualizar.php?idObra=<?= $obra['idObra'] ?>"><?= $obra['tituloObra'] ?></a></h3>

												<p>
													<?= substr($obra['sinopseObra'], 0, 200) ?>...
												</p>
											</section>

										</div>

									<?php } ?>

								</div>
							</div>
						</section>
						<div class="text-right">
							<a class="button " href="<?= arquivo('modulos/modulos-site/obra/colecao.php') ?>">Ver mais</a>

						</div>
					</div>
					</div>
					<div class="col-12">
						<section class="box features">
							<h2 class="major titulo-hover"><a href="<?= arquivo("modulos/modulos-site/publicacao/publicacao.php") ?>"><span>Publicações</span></a></h2>
							<div>
								<div class="row">
									<?php
									$sql = "SELECT * FROM publicacoes ORDER BY IdPub DESC LIMIT 4";
									$publicacoes = retornaDados($sql);

									foreach ($publicacoes as $publicacao) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<h3><a class="titulo-hover" href="modulos/modulos-site/publicacao/visualizar.php?IdPub=<?=$publicacao['IdPub']?>"><?= $publicacao['tituloPub'] ?></a></h3>

												<p>
													<?= substr($publicacao['textoPub'], 0, 200) ?>...
												</p>
											</section>
										</div>

									<?php } ?>

								</div>
							</div>


						</section>
						<div class="text-right">
							<a class="button " href="<?= arquivo('modulos/modulos-site/publicacao/publicacao.php') ?>">Ver mais</a>

						</div>
					</div>

				</div>

			</div>
	</div>
	</div>

	</section>

	</div>
	</div>
	</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row gtr-200">
				<?php include_once path('template/template-site/contato.php'); ?>

			</div>

		</div>
	</footer>

	</div>

	<?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>