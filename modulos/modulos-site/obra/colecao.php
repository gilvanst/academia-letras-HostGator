<!DOCTYPE HTML>

<html>
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> Coleção</p>
		</div>
	</div>
</header>


<body class="is-preload">
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
									$sql = "SELECT * FROM obra ORDER BY idObra ASC";
									$obras = retornaDados($sql);

									foreach($obras as $obra)
									{ ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<a href="visualizar.php?idObra=<?= $obra['idObra'] ?>" class="image featured">
													<img src="<?= arquivo('img/' . $obra['imagemObra']) ?>" alt="" />
													
												</a>
												<h3><a href="visualizar.php?idObra=<?= $obra['idObra'] ?>"><?= $obra['tituloObra'] ?></a></h3>

												<p>
													<?= substr($obra['sinopseObra'], 0, 200) ?>...
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
					
				</div>

			</div>
		</footer>

	</div>

	<?php include_once path('template/template-site/importacoes-js.php'); ?>
</body>

</html>