<html>
<?php
include '../../../config.php';


if (!empty($_GET['IdPub'])) {
    $id = $_GET['IdPub'];
}
$sql = 'SELECT * FROM publicacoes  where IdPub= ' . $id . '';
$publicacao = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $publicacao['IdPub'];
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

                        <div class=>
                            <h1 class="mb-4">Gênero:<?= $publicacao['generoPub'] ?></h1>
                            <p><?= $publicacao['textoPub'] ?></p>

                        </div>


                        <div class="text-justify mt-5">
                            <i>Autores:</i>
                            <i><?= $publicacao['autoresPub'] ?></i>
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