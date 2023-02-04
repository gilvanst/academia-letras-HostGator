
<?php
include '../../../config.php';


if (!empty($_GET['IdPub'])) {
    $id = $_GET['IdPub'];
}
$sql = 'SELECT * FROM publicacoes  where idPub= ' . $id .'';
$publicacao = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $publicacao['IdPub'];
    $titulo = $publicacao['tituloPub'];
    $autores = $publicacao['autoresPub'];
    $genero = $publicacao['generoPub'];
    $texto = $publicacao['textoPub'];
    $poema = $publicacao['poema'];
}
?>
<html>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>


<header id="header">
    <div class="logo container">
        <div>
        <h1> <a href="<?= arquivo("modulos/modulos-site/publicacao/publicacao.php") ?>" class="button2">  <?= $publicacao['tituloPub'] ?></a></h1>
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

                    <div>
                        <?php
                            if($poema == 'Sim'){ ?>
                                <p class="text-center"><?= nl2br($publicacao['textoPub']) ?></p>
                            <?php }else{ ?>  
                                <p class="text-justify"><?= nl2br($publicacao['textoPub']) ?></p>
                            <?php } ?>  
                                
                        <i>Autores:</i>
                        <i><?= $publicacao['autoresPub'] ?></i>

                    </div>

                    </div>
                </div>
                <div class="text-right">
                    <a class="button " href="<?= arquivo('modulos/modulos-site/publicacao/publicacao.php') ?>">Voltar</a>
    
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