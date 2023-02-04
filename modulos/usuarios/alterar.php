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
                    if (!empty($_GET['id'])) {
                        $id = $_GET['id'];
                    }

                    $pdo = Banco::conectar();
                    $sql = 'SELECT * FROM usuario where id = ' . $id . '';

                    foreach ($pdo->query($sql) as $row) {
                        $id = $row['id'];
                        $nome = $row['nome'];
                        $email = $row['email'];
                        $telefone = $row['telefone'];
                        $senha = $row['senha'];
                        $csenha = $row['senha'];
                    
                    }
                    Banco::desconectar();
                    ?>

                    <form action="update.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
                        </div>

                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="<?php echo $email; ?>">
                        </div>

                        <div class="form-gorup">
                            <label for="telefone">Telefone</label>
                            <input class="form-control" type="tel" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="senha">Senha</label>
                            <input class="form-control" type="password" id="senha" name="senha" value="<?php echo $senha; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="csenha">Confirme a Senha</label>
                            <input class="form-control" type="password" id="csenha" name="csenha" value="<?php echo $csenha; ?>">
                        </div>

                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                        <div class="text-right my-3">
                            <input class="btn btn-primary" type="submit" value="Alterar">
                            
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