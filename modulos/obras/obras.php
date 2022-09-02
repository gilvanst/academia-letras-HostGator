<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';

if (empty($_SESSION['usuario'])) {
    header('Location: ' . arquivo('index.php'));
    exit;
}

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

                    <!-- Content Row -->
                    <div class="row">


                        <div class="col-12 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Cadastro de Obras</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-right mb-3">
                                        <a class="btn btn-primary" href="inserir.php">Inserir</a>
                                    </div>

                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="thead-dark">
                                                <th>#</th>
                                                <th>Titulo</th>
                                                <th>Autores</th>
                                                <th>Gênero</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = 'SELECT * FROM  obra ';
                                            $obras = retornaDados($sql);

                                            foreach ($obras as $obra) { ?>
                                                <tr>
                                                    <th scope="row"><?= $obra['idObra'] ?></th>
                                                    <td><?= $obra['tituloObra'] ?></td>
                                                    <td><?= $obra['autoresObra'] ?></td>
                                                    <td><?= $obra['generoObra'] ?></td>
                                                    <td width='250' class="text-center">
                                                        <a class="btn btn-sm btn-primary " href="visualizar.php?idObra=<?= $obra['idObra'] ?>">Ver</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
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