
<?php
include '../../../config.php';


if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    
    
}
    $sql = 'SELECT * FROM memorial  where id= ' . $id .'';
    $membro = retornaDado($sql);


foreach (retornaDado($sql) as $row) {
    $id = $membro['id'];
    $nome = $membro['nome'];
    $posicao = $membro['posicao'];
    $cadeira = $membro['cadeira'];
    $sobre = $membro['sobre'];
    
} 
?>
<!DOCTYPE HTML>

<html>
<link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

<?php include_once path('template/template-site/head.php'); ?>


    <header id="header">
        <div class="logo container">
            <div>
                <h1><?= $membro['nome'] ?></h1>
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
                                        <img src="<?= arquivo('img/' . $membro['foto']) ?>" class="img-fluid" alt="Imagem responsiva">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="mb-4">Acadêmico: <?= $membro['nome'] ?></p>
                                                    <p class="mb-4">Posição: <?= $membro['posicao'] ?></p>
                                                    <p class="mb-4">Cadeira: <?= $membro['cadeira'] ?></p>
                                                    <p class="mb-4">Sobre: <?= $membro['sobre'] ?></p>
                                            
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