<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';

if (empty($_SESSION['usuario'])) {
    header('Location: ' . arquivo('login.php'));
    exit;
}

?>

<?php include_once path('template/head.php'); ?>


<body>




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
                        <h1 class="display-4 text-center">Alterar Cadastro</h1>

                        <form action="insertAcad.php" method="POST">

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input class="form-control" type="text" id="nome" name="nomeAcad">
                            </div>

                            <div class="form-group">
                                <label for="cadeira">Cadeira</label>
                                <input class="form-control" type="number" id="cadeira" name="cadeiraAcad">
                            </div>

                            <div class="form-group">
                                <label for="posicao">Posição</label>
                                <input class="form-control" type="text" id="posicao" name="posicaoAcad">
                            </div>

                            <div class="text-right my-3">
                                <input class="btn btn-primary" type="submit" value="Inserir">
                                <a class="btn btn-info " href="academicos.php">Voltar</a>
                            </div>


    </body>


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