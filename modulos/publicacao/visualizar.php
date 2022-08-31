<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';

if (empty($_SESSION['usuario'])) {
    header('Location: ' . arquivo('index.php'));
    exit;
}

if (!empty($_GET['IdPub'])) {
    $id = $_GET['IdPub'];
}

$pdo = Banco::conectar();
$sql = 'SELECT * FROM publicacoes where IdPub = '. $id . '';

foreach ($pdo->query($sql) as $row) {
    $id = $row['IdPub'];
    $titulo = $row['tituloPub'];
    $autores = $row['autoresPub'];
    $genero = $row['generoPub'];
    $texto = $row['textoPub'];
}

Banco::desconectar();
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
                    <h1 class="display-4 text-center"><?= $titulo ?></h1>
                    <div class="text-justify">
                        <p><?= $texto ?></p>
                        <i>Autores:</i>
                        <i><?= $autores ?></i>
                    </div>




                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterar.php?IdPub=<?= $row['IdPub'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?IdPub=<?= $row['IdPub'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="publicacao.php?IdPub=<?= $row['IdPub'] ?>">Voltar</a>
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