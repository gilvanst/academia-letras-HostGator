<!DOCTYPE HTML>

<html>
<?php
include '../../../config.php';


if (!empty($_GET['idAcad'])) {
    $id = $_GET['idAcad'];
    
    
}
    $sql = 'SELECT * FROM academicos  where idAcad= ' . $id .'';
    $membro = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $membro['idAcad'];
    $nome = $membro['nomeAcad'];
    $posicao = $membro['posicaoAcad'];
    $cadeira = $membro['cadeiraAcad'];
    $sobre = $membro['sobreAcad'];
    
} 
?>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>


    <header id="header">
        <div class="logo container">
            <div>
                <h1><?= $membro['nomeAcad'] ?></h1>
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
                                        <img src="<?= arquivo('img/' . $membro['fotoAcad']) ?>" class="img-fluid" alt="Imagem responsiva">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="mb-4">Acadêmico: <?= $membro['nomeAcad'] ?></p>
                                                    <p class="mb-4">Posição: <?= $membro['posicaoAcad'] ?></p>
                                                    <p class="mb-4">Cadeira: <?= $membro['cadeiraAcad'] ?></p>
                                                    <p class="mb-4">Sobre: <?= $membro['sobreAcad'] ?></p>
                                            
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