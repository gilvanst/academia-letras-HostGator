<?php
session_start();
include '../../config.php';
verificaAcesso();
if (!empty($_GET['idObra'])) {
    $id = $_GET['idObra'];
}
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
                        <h1 class="display-4 text-center">Cadastrar Obra</h1>

                        <form action="insert.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input class="form-control" type="text" id="titulo" name="tituloObra" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="autores">Autores</label>
                                <input class="form-control" type="text" id="autores" name="autoresObra" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="genero">Gênero</label>
                                <input class="form-control" type="text" id="genero" name="generoObra" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="isbn">Isbn</label>
                                <input class="form-control" type="number" id="isbn" name="isbnObra" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="ano">Ano de publicação</label>
                                    <input class="form-control" type="number" id="ano" name="anoObra" required>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                    <div class="invalid-feedback">
                                        campo obrigatório!
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="paginas">Quantidade de páginas</label>
                                    <input class="form-control" type="number" id="paginas" name="paginasObra" required>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                    <div class="invalid-feedback">
                                        campo obrigatório!
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="image">Capa da obra</label>
                                    <input type="file" class="form-control-file" id="image" name="imagem">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pdf">Arquivo para leitura da obra</label>
                                    <input class="form-control-file" type="file" id="paginas" name="pdfObra">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="link">Link da obra</label>
                                <input class="form-control" type="url" id="link" name="linkObra">
                            </div>

                            <div class="form-group">
                                <label for="sinopse">Sinopse</label>
                                <textarea class="form-control" id="sinopse" name="sinopseObra" required></textarea>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>
                            <div class="text-right my-3">
                                <input class="btn btn-primary" type="submit" value="Inserir">
                                <a class="btn btn-info " href="obras.php">Voltar</a>
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