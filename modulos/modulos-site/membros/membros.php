<!DOCTYPE html>
<html lang="en">
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> membros </p>
		</div>
	</div>
</header>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <?php include_once path('template/template-site/navbar.php'); ?>
        
        <section id="main">
			<div class="container">
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
													<img src="<?= arquivo('img/' . $membro['fotoAcad']) ?>" alt="" />

												</a>
												<h3><a class="titulo-hover" href="visualizar.php?idAcad=<?= $membro['idAcad'] ?>"><?= $membro['nomeAcad'] ?></a></h3>
                                                <p>Posição: <?= $membro['posicaoAcad'] ?></p>
                                                <p>Cadeira: <?= $membro['cadeiraAcad'] ?></p>
												<p>
													<?= substr($membro['sobreAcad'], 0, 200) ?>...
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

        <section id="main">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-12">
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>

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