<!DOCTYPE HTML>
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
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
				<div class="row">
				</div>
						<!-- Blog -->
					<div class="col-12">
						<section class="box blog">
							<div>
								<div class="row">
								<?php
										$sql = "SELECT * FROM eventos ORDER BY idEve DESC";
										$eventos = retornaDados($sql);

										foreach($eventos as $evento)
										{ ?>
											<div class="col-3 col-6-medium col-12-small">
												<!-- Feature -->
												<section class="box feature">
													<h3><a href="#"><?= $evento['nomeEve'] ?></a></h3>
													<h3><?= $evento['localEve']?></h3>
                                                    <h3><?= $evento['dataEve']?>/<?= $evento['horaEve']?></h3>
													<p>
														<?= substr($evento['descricaoEve'], 0, 200) ?>...
													</p>
												</section>
											</div>

								<?php } ?>
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