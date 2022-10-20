<html>
<?php
include '../../../config.php';


if (!empty($_GET['idPub'])) {
    $id = $_GET['idPub'];
    
    
}
    $sql = 'SELECT * FROM publicacoes  where idPub= ' . $id .'';
    $publicacao = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $publicacao['idPub'];
    $titulo = $publicacao['tituloPub'];
    $autores = $publicacao['autoresPub'];
    $genero = $publicacao['generoPub']; 
    $texto = $publicacao['textoPub'];
} 
?>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>


    <header id="header">
        <div class="logo container">
            <div>
                <h1><?= $publicacao['tituloPub'] ?></h1>
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

                                            <div class="media">

                                                <div class="media-body">
                                                    <p class="mb-4">Gênero:<?= $publicacao['generoPub'] ?></p>
                                                    

                                                    
                                                </div>

                                            </div>
                                            <div class="text-justify mt-5">
                                                <p><?= $publicacao['sinopsePub'] ?></p>
                                                <i>Autores:</i>
                                                <i><?= $publicacao['autoresPub'] ?></i>
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