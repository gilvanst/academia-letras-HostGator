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

                    <!--  exibindo mensagem de verificação de senhas -->
                    <?php if (!empty($_GET['msg'])) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= $_GET['msg'] ?>
                            <strong></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php } ?>
                    <!-- Fim da verificação-->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <h1 class="display-4 text-center">Cadastrar usuario</h1>

                        <form action="insert.php" method="POST" class="needs-validation" novalidate>

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input class="form-control" type="text" id="nome" name="nome" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="poema">Tipo de usúario</label>
                                <select class="custom-select" name="tipo" required>
                                    <option>administrador</option>
                                    <option selected>autor</option>
                                </select>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input class="form-control" type="tel" id="telefone" name="telefone" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input class="form-control" type="password" id="senha" name="senha" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="senha">Confirme a senha</label>
                                <input class="form-control" type="password" id="csenha" name="csenha" required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                                <div class="invalid-feedback">
                                    campo obrigatório!
                                </div>
                            </div>

                            <div class="text-right my-3">
                                <input class="btn btn-primary" type="submit" value="Inserir">
                                <a class="btn btn-info " href="usuarios.php">Voltar</a>
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