<!DOCTYPE HTML>

<html>
<?php
include '../../../config.php';


if (!empty($_GET['idEve'])) {
    $id = $_GET['idEve'];
    
    
}
    $sql = 'SELECT * FROM eventos  where idEve= ' . $id .'';
    $evento = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $evento['idEve'];
    $nome = $evento['nomeEve'];
    $local = $evento['localEve'];
    $data = $evento['dataEve'];
    $hora = $evento['horaEve'];
    $descrição = $evento['descricaoEve'];
} 
?>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>


    <header id="header">
        <div class="logo container">
            <div>
                <h1><?= $evento['nomeEve'] ?></h1>
                <p></p>
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

                                        <div class="container-fluid ">
                                        <img src="<?= arquivo('img/' . $evento['imagemEve']) ?>" class="img-fluid" alt="Imagem responsiva">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="mb-4">Evento: <?= $evento['nomeEve'] ?></p>
                                                    <p class="mb-4">Local: <?= $evento['localEve'] ?></p>
                                                    <p class="mb-4">Data do evento: <?= $evento['dataEve'] ?></p>
                                                    <p class="mb-4">Hora:<?= $evento['horaEve'] ?></p>
                                                    <p class="mb-4">Descrição: <?= $evento['descricaoEve'] ?></p>
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