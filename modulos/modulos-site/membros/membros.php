<!DOCTYPE html>
<html lang="en">
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
			<p> membros </p>
		</div>
	</div>
</header>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<?php include_once path('template/template-site/navbar.php'); ?>

		<section id="main">
			<div class="container">
				
							<article class="box page-content">
				
								<section>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus
										justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis,
										ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet
										vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
										Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
										rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien
										vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
										Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
										rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien.
										Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi.
										Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum commodo luctus.
									</p>
								</section>
				
				
							</article>
				<div class="row">
					<div class="col-12">
						<section class="box features">
							<div>
								<div class="row">
									<?php
									$sql = "SELECT * FROM academicos ORDER BY idAcad ASC";
									$membros = retornaDados($sql);

									foreach ($membros as $membro) { ?>
										<div class="col-3 col-6-medium col-12-small">
											<!-- Feature -->
											<section class="box feature">
												<a href="visualizar.php?idAcad=<?= $membro['idAcad'] ?>" class="image featured">
													<img src="<?= arquivo('img/' . $membro['fotoAcad']) ?>" alt="" width="200px" height="288px" />

												</a>
												<h3><a class="titulo-hover" href="visualizar.php?idAcad=<?= $membro['idAcad'] ?>"><?= $membro['nomeAcad'] ?></a></h3>


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


		</section>
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