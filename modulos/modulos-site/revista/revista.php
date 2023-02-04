
<?php
include '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
    <div class="logo container">
        <div>
            <h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
            <p> Revista plural</p>
        </div>
    </div>
</header>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <?php include_once path('template/template-site/navbar.php'); ?>

        <section id="main">
            <div class="container">
                <div class="row gtr-200">
                  
                    <div class="col-12">
                        <section class="box features">

                            <div>

                                <div class="row">
                                    <?php

                                    $sql = "SELECT * FROM revista ORDER BY ano ASC";



                                    $revistas = retornaDados($sql);

                                    foreach ($revistas as $revista) { ?>
                                        <div class="col-3 col-6-medium col-12-small">
                                            <!-- Feature -->
                                            <section class="box feature">
                                                <a href="visualizar.php?id=<?= $revista['id'] ?>" class="image featured">
                                                    <iframe src="../../../pdf/<?= $revista['pdf'] ?> " width="100%" height="500px" frameborder="0" dowload></iframe>
                                                </a>
                                                <h3><a class="titulo-hover" href="visualizar.php?id=<?= $revista['id'] ?>">Revista Plural <?= $revista['ano'] ?></a></h3>

                                                <p>
                                                    Edição: <?= substr($revista['edicao'], 0, 200) ?>
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