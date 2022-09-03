<!DOCTYPE html>
<html lang="pt-br">

<?php
    include '../../config.php';

    if (empty($_SESSION['usuario'])) {
        header('Location: ' . arquivo('index.php'));
        exit;
    }

    if (!empty($_GET['idObra'])) {
        $id = $_GET['idObra'];
    }

    $sql = 'SELECT * FROM obra where idObra = ' . $id . '';
    $obra = retornaDado($sql);
?>

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
                    <img src="../../img/<?= $obra['imagemObra'] ?>" download class=" align-self-start mr-3 rounded" width="200px" height="288px" alt="Capa do livro" >
                        <div class="media-body ">
                            <p>Ano de publicação: <?= $obra['anoObra'] ?></p>
                            <p>Gênero:<?= $genero ?></p>
                            <p>Páginas: <?= $paginas ?></p>
                            <p>Autores: <?= $autores ?></p>
                            <p>Arquivo para leitura: <a href="../../pdf/<?= $pdf ?>"download> <?= $pdf ?></a></p>
                            <p>Link para compra: <a href="<?=$link ?>"><?= $link ?></a></p>
                            <p>isbn: <?= $isbn ?></p>


                        </div>
                    </div>
                    <div class="text-justify mt-5">
                        <p><?= $sinopse ?></p>
                        <i>Autores:</i>
                        <i><?= $autores ?></i>
                    </div>




                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterar.php?idObra=<?= $row['idObra'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?idObra=<?= $row['idObra'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="obras.php?idObra=<?= $row['idObra'] ?>">Voltar</a>
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