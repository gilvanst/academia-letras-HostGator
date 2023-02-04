
<?php
include '../../../config.php';



?>
<!DOCTYPE HTML>
<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
    <div class="logo container">
        <div>
            <h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
            <p> Galeria de videos</p>
        </div>
    </div>
</header>
<html>

<body class="is-preload">
    <div id="page-wrapper">

        <?php include_once path('template/template-site/navbar.php'); ?>
        <!-- Main -->

        <section id="main">
            <div class="container">


                <div class="row">
                    <?php


                    $sql = "SELECT * FROM videos ORDER BY id ASC ";

                    $videos = retornaDados($sql);


                    foreach ($videos as $video) { ?>
                        <div class="col-12">
                            <section class="box blog">
                                <div>
                                    <div class="row">


                                        <div class="col-3 col-6-medium col-12-small">
                                            <!-- Feature -->
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <section>
                                                        <h3 class="titulo-hover"><?= $video['nome'] ?></a></h3>
                                                        <iframe width="560" height="315" src="<?= getEmbedLink($video['link']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                        <p class="mb-4">Sobre: <?= $video['sobre'] ?></p>
                                                    </section>
                                                </div>


                                            </div>
                            </section>
                        </div>
                    <?php } ?>
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