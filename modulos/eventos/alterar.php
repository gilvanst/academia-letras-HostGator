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
                    if (!empty($_GET['idEve'])) {
                        $id = $_GET['idEve'];
                    }

                    $pdo = Banco::conectar();
                    $sql = 'SELECT * FROM eventos where idEve = ' . $id . '';

                    foreach ($pdo->query($sql) as $row) {
                        $id = $row['idEve'];
                        $nome = $row['nomeEve'];
                        $local = $row['localEve'];
                        $data = $row['dataEve'];
                        $hora = $row['horaEve'];
                        $descricao = $row['descricaoEve'];
                    }
                    Banco::desconectar();
                    ?>

                    <form action="update.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome do Evento</label>
                            <input class="form-control" type="text" id="nome" name="nomEve" value="<?php echo $nome; ?>">
                        </div>

                        <div class="form-group ">
                            <label for="local">Local</label>
                            <input class="form-control" type="text" id="local" name="localEve" value="<?php echo $local; ?>">
                        </div>
                        
                        <div class="form-row">
                            <div class="form-gorup col-md-6">
                                <label for="data">Data</label>
                                <input class="form-control" type="date" id="data" name="dataEve" value="<?php echo $data; ?>">
                            </div>
                            
                            <div class="form-gorup col-md-6">
                                <label for="horaEve">Hora</label>
                                <input class="form-control" type="time" id="hora" name="horaEve" value="<?php echo $hora; ?>">
                            </div>
                        </div>
                            
                        <div class="form-gorup">
                            <label for="descricao">Descrição</label>
                            <input class="form-control" type="text" id="descricao" name="descricaoEve" value="<?php echo $descricao; ?>">
                        </div>

                        <input type="hidden" id="id" name="idEve" value="<?php echo $id; ?>">

                        <div class="text-right my-3">
                            <input class="btn btn-primary" type="submit" value="Alterar">
                            <a class="btn btn-info" href="eventos.php">Voltar</a>
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