
<?php
include '../../../config.php';


if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    
    
}
    $sql = 'SELECT * FROM revista  where id= ' . $id .'';
    $revista = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $revista['id'];
    $edicao = $revista['edicao'];
    $ano = $revista['ano'];
    $pdf = $revista['pdf'];
} 
?>
<!DOCTYPE HTML>

<html>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>


    <header id="header">
        <div class="logo container">
            <div>
                <h1>Revista plural <?= $revista['ano'] ?></h1>
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
                                <iframe src="../../../pdf/<?= $revista['pdf'] ?> "  width="100%" height="800rem" frameborder="0" dowload></iframe>
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