<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = 'SELECT * FROM revista where id = ' . $id . ' ';
$revista = retornaDado($sql);

foreach (retornaDado($sql) as $row) {
    $id = $revista['id'];
    $edicao = $revista['edicao'];
    $ano = $revista['ano'];
    $pdf = $revista['pdf'];
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
                    <h1 class="display-4 text-center">Revista Plural <?=$revista['ano']?></h1>
                    <iframe src="../../pdf/<?= $revista['pdf'] ?> "  width="100%" height="500px" frameborder="0" dowload></iframe>

                    <div class="text-left my-3 ">
                        <p>edição: <?= $revista['edicao']?></p>


                    </div>




                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterar.php?id=<?= $revista['id'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $revista['id'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="revista.php?id=<?= $revista['id'] ?>">Voltar</a>
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