<?php
session_start();
include '../../config.php';
verificaAcesso();

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
                <?php
                $pdo = Banco::conectar();
                $sql = 'SELECT * FROM historia';

                foreach ($pdo->query($sql) as $row) { ?>

                    <div class="container-fluid">
                        <h1 class="display-4 text-center">Nossa história</h1>

                        <div class="text-justify"><?= $row['texto'] ?></div>
                        
                        <div class="text-right my-3">
                            <a class="btn btn-sm btn-warning" href="alterar.php?idHis=<?= $row['idHis'] ?>">Alterar</a>
                        </div>
                    </div>

                <?php }

                Banco::desconectar();
                ?>
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