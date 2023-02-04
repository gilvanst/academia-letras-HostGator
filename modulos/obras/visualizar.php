<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_GET['idObra'])) {
    $id = $_GET['idObra'];
}

$sql = 'SELECT * FROM obra where idObra= ' . $id . ' ';
$obra = retornaDado($sql);

foreach (retornaDado($sql) as $row) {
    $id = $obra['idObra'];
    $titulo = $obra['tituloObra'];
    $autores = $obra['autoresObra'];
    $sinopse = $obra['sinopseObra'];
    $imagem = $obra['imagemObra'];
    $isbn = $obra['isbnObra'];
    $ano = $obra['anoObra'];
    $paginas = $obra['paginasObra'];
    $pdf = $obra['pdfObra'];
    $link = $obra['linkObra'];
    $genero = $obra['generoObra'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include_once path('template/head.php'); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once path('template/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once path('template/navbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="display-4 text-center"><?= $obra['tituloObra'] ?></h1>

                    <div class="media">
                        <img src="../../img/<?= $obra['imagemObra'] ?>" download class=" align-self-start mr-3 rounded" width="200px" height="288px" alt="Capa do livro">
                        <div class="media-body ">
                            <p>Ano de publicação: <?= $obra['anoObra'] ?></p>
                            <p>Gênero:<?= $obra['generoObra'] ?></p>
                            <p>Páginas: <?= $obra['paginasObra'] ?></p>
                            <p>Autores: <?= $obra['autoresObra'] ?></p>
                            <p>Arquivo para leitura: <a href="../../pdf/<?= $obra['pdfObra'] ?>" download> <?= $obra['pdfObra'] ?></a></p>
                            <p>Link para compra: <a href="<?= $obra['linkObra'] ?>"><?= substr($obra['linkObra'], 0, 50 ) ?>...</a></p>
                            <p>isbn: <?= $obra['isbnObra'] ?></p>


                        </div>
                    </div>
                    <div class="text-justify mt-5">
                        <p><?= $obra['sinopseObra'] ?></p>
                        <i>Autores:</i>
                        <i><?= $obra['autoresObra'] ?></i>
                    </div>




                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterar.php?idObra=<?= $obra['idObra'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?idObra=<?= $obra['idObra'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="obras.php?idObra=<?= $obra['idObra'] ?>">Voltar</a>
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Academia Araçatubense De Letras &copy; 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <?php include path('template/logout.php'); ?>

        <?php include path('template/importacoes-js.php'); ?>
</body>

</html>