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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="display-4 text-center">Alterar História</h1>


                    <?php
                    if (!empty($_GET['idHis'])) {
                        $id = $_GET['idHis'];
                    }

                    $pdo = Banco::conectar();
                    $sql = 'SELECT * FROM historia where idHis = ' . $id . '';

                    foreach ($pdo->query($sql) as $row) {
                        $id      = $row['idHis'];
                        $texto  = $row['texto'];
                    }
                    Banco::desconectar();
                    ?>

                    <form action="update.php" class="needs-validation" method="POST" novalidate>



                        <div class="form-gorup text-justify ">
                            <label for="texto">Texto</label>
                            <textarea class="form-control" type="text" id="texto" name="texto" required><?php echo $texto; ?></textarea>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                campo obrigatório!
                            </div>
                        </div>

                        <input type="hidden" id="id" name="idHis" value="<?php echo $id; ?>">

                        <div class="text-right my-3">
                            <input class="btn btn-primary" type="submit" value="Alterar">
                            <a class="btn btn-info" href="historia.php">Voltar</a>
                        </div>
                    </form>

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