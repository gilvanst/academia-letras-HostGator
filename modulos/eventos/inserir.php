<?php
session_start();
include '../../config.php';

verificaAcesso();
?>

<!DOCTYPE html>
<html lang="pt-br">

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
                        <h1 class="display-4 text-center">Cadastrar evento</h1>

                        <form action="insert.php" enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>

                            <div class="form-group ">
                                <label for="imagem">foto do evento</label>
                                <input type="file" class="form-control-file" id="imagem" name="imagemEve" required>

                            </div>

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input class="form-control" type="text" id="nome" name="nomeEve" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="local">Local</label>
                                <input class="form-control" type="text" id="local" name="localEve" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="data">Data</label>
                                    <input class="form-control" type="date" id="data" name="dataEve" required>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                    <div class="invalid-feedback">
                                        campo obrigatório!
                                    </div>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="hora">Hora</label>
                                    <input class="form-control" type="time" id="hora" name="horaEve" required>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                    <div class="invalid-feedback">
                                        campo obrigatório!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input class="form-control" type="text" id="descricao" name="descricaoEve" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="text-right my-3">
                                <input class="btn btn-primary" type="submit" value="Inserir">
                                <a class="btn btn-info " href="eventos.php">Voltar</a>
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