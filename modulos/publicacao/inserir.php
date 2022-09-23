<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';
include_once '../login/sessao.php';

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
                        <h1 class="display-4 text-center">Cadastrar Publicação</h1>

                        <form action="insert.php" method="POST">

                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input class="form-control" type="text" id="titulo" name="tituloPub">
                            </div>

                            <div class="form-group">
                                <label for="autores">Autores</label>
                                <input class="form-control" type="text" id="autores" name="autoresPub">
                            </div>

                            <div class="form-group">
                                <label for="genero">Gênero</label>
                                <input class="form-control" type="text" id="genero" name="generoPub">
                            </div>
                            <div class="form-group">
                                <label for="texto">Texto</label>
                                <textarea class="form-control" id="texto" name="textoPub"></textarea>
                            </div>

                            <div class="text-right my-3">
                                <input class="btn btn-primary" type="submit" value="Inserir">
                                <a class="btn btn-info " href="publicacao.php">Voltar</a>
                            </div>
                        </form>
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