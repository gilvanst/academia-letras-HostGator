<!DOCTYPE HTML>
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> publicações</p>
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
				<div class="col-12">
						<section class="box features">
							<div>
								<div class="row">
								<?php
										$sql = "SELECT * FROM publicacoes ORDER BY idPub DESC ";
										$publicacoes = retornaDados($sql);

										foreach($publicacoes as $publicacao)
										{ ?>
											<div class="col-3 col-6-medium col-12-small">
												<!-- Feature -->
												<section class="box feature">
													<h3><a href="#"><?= $publicacao['tituloPub'] ?></a></h3>

													<p>
														<?= substr($publicacao['textoPub'], 0, 200) ?>...
													</p>
												</section>
											</div>

										<?php } ?>

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
					<div class="col-12">

						<!-- About -->
						<section>
							<h2 class="major"><span>Desenvolvedores</span></h2>
							<p>
								Gilvan Santos <br>
								Bruno Corrêa <br>
								Caique Pollachini <br>
								Kenjhon Leandro <br>
							</p>
						</section>

					</div>
					
				</div>

				

			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>