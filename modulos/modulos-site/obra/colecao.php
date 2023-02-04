
<?php
include '../../../config.php';
?>
<!DOCTYPE HTML>

<html>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">
<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
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



					<form action="colecao.php" method="POST" class="form-inline">
						<div class="row">
							<div class="col">

								<input type="submit" value="Pesquisar">
							</div>
							<div class="col">

								<input class="form-control  " type="text" name="pesquisa" value="<?= empty($_POST['pesquisa']) ? '' : $_POST['pesquisa'] ?>">
							</div>
						</div>
					</form>



					<div class="col-12 	">
						<section class="box features">

							<div>

								<div class="row">
									<?php
									if (!empty($_POST['pesquisa'])) {
										$sql = "SELECT 
													* 
												FROM 
													obra 
												WHERE
													tituloObra LIKE '%{$_POST['pesquisa']}%'
													OR autoresObra LIKE '%{$_POST['pesquisa']}%'
													OR sinopseObra LIKE '%{$_POST['pesquisa']}%'
													OR isbnObra LIKE '%{$_POST['pesquisa']}%'";

										$sql .= " ORDER BY tituloObra ASC";
									} else {
										$sql = "SELECT * FROM obra ORDER BY tituloObra ASC";
									}


									$obras = retornaDados($sql);

									foreach ($obras as $obra) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<a href="visualizar.php?idObra=<?= $obra['idObra'] ?>" class="image featured">
													<img src="<?= arquivo('img/' . $obra['imagemObra']) ?>" alt="" />

												</a>
												<h3><a class="titulo-hover" href="visualizar.php?idObra=<?= $obra['idObra'] ?>"><?= $obra['tituloObra'] ?></a></h3>

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