<?php
include '../../../config.php';
?>
<!DOCTYPE HTML>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
			<p> notícias</p>
		</div>
	</div>
</header>
<html>

<body class="homepage is-preload">
	<div id="page-wrapper">
		<?php include_once path('template/template-site/navbar.php'); ?>

		<!-- Main -->
		<section id="main">
			<div class="container">

				<!-- Blog -->
				<div class="col-12">
					<section class="box blog">
						<div>
							<div class="row">
								<?php
								$sql = "SELECT * FROM eventos ORDER BY idEve DESC ";
								$eventos = retornaDados($sql);

								foreach ($eventos as $evento) { ?>
									<div class="col-3 col-6-medium col-12-small">
										<!-- Feature -->
										<div class="container-fluid">
											<div class="row">
												<section>
													<img src="<?= arquivo('img/' . $evento['imagemEve']) ?>" style="width:300px; height:auto;">
													<h3><a class="titulo-hover" href="visualizar.php?idEve=<?= $evento['idEve'] ?>"><?= $evento['nomeEve'] ?></a></h3>
													<p class="mb-4">Local: <?= $evento['localEve'] ?></p>
													<p class="mb-4">data: <?= $evento['dataEve'] ?>/<?= $evento['horaEve'] ?></p>
													<p class="mb-4">
														sobre: <?= substr($evento['descricaoEve'], 0, 200) ?>...
													</p>
												</section>
											</div>
										</div>
										<?php } ?>
					</section>
					
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
	</footer>

	</div>
	<?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>