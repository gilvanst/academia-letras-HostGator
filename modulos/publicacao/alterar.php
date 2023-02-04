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
                    <h1 class="display-4 text-center">Alterar Cadastro</h1>


                    <?php
                    if (!empty($_GET['IdPub'])) {
                        $id = $_GET['IdPub'];
                    }

                    $pdo = Banco::conectar();
                    $sql = 'SELECT * FROM publicacoes where IdPub = ' . $id . '';

                    foreach ($pdo->query($sql) as $row) {
                        $id      = $row['IdPub'];
                        $titulo  = $row['tituloPub'];
                        $autores = $row['autoresPub'];
                        $genero  = $row['generoPub'];
                        $texto   = $row['textoPub'];
                        $poema   = $row['poema'];
                    }
                    Banco::desconectar();
                    ?>

                    <form action="update.php" class="needs-validation" method="POST" novalidate>
                        <div class="form-group">
                            <label for="titulo">Titulo da Publicação</label>
                            <input class="form-control" type="text" id="titulo" name="tituloPub" value="<?php echo $titulo; ?>" required>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                campo obrigatório!
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="autores">Autores</label>
                            <input class="form-control" type="text" id="autores" name="autoresPub" value="<?php echo $autores; ?>">
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                campo obrigatório!
                            </div>
                        </div>

                        <div class="form-gorup">
                            <label for="genero">Gênero Textual</label>
                            <input class="form-control" type="text" id="genero" name="generoPub" value="<?php echo $genero; ?>">
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                campo obrigatório!
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="poema">É um poema?</label>
                            <select class="custom-select" name="poema" value="">
                                <option selected><?php echo $poema ?></option>
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>

                        <div class="form-gorup text-justify ">
                            <label for="texto">Texto</label>
                            <textarea class="form-control" type="text" id="texto" name="textoPub" required><?php echo $texto; ?></textarea>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                campo obrigatório!
                            </div>
                        </div>

                        <input type="hidden" id="id" name="IdPub" value="<?php echo $id; ?>">

                        <div class="text-right my-3">
                            <input class="btn btn-primary" type="submit" value="Alterar">
                            <a class="btn btn-info" href="visualizar.php">Voltar</a>
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