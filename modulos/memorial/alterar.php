<?php
session_start();
include '../../config.php';

    verificaAcesso();

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }
    
    $pdo = Banco::conectar();
    $sql = 'SELECT * FROM memorial where id = ' . $id . '';
    
    foreach ($pdo->query($sql) as $row) {
        $id      = $row['id'];
        $nome    = $row['nome'];
        $cadeira = $row['cadeira'];
        $posicao = $row['posicao'];
        $sobre   = $row['sobre'];
        $foto    = $row['foto'];
    }
    Banco::desconectar();
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


                   
                   

                    <form action="update.php" enctype="multipart/form-data" method="POST">

                        <div class="form-group">
                            <label for="foto">Foto</label><br>
                            <input class="form-control-file" type="file" id="file" name="foto"><?=$row['foto']?>
                        </div>

                        <div class="form-group">
                            <label for="nome">Nome</label><br>
                            <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $row['nome']?>">
                        </div>

                        <div class="form-group ">
                            <label for="cadeira">Cadeira</label><br>
                            <input class="form-control" type="number" id="cadeira" name="cadeira" value="<?php echo $row['cadeira']?>">
                        </div>

                        <div class="form-gorup">
                            <label for="posicao">Posição</label><br>
                            <input class="form-control" type="text" id="posicao" name="posicao" value="<?php echo $row['posicao']?>">
                        </div>
                        <div class="form-gorup">
                            <label for="sobre">Informações sobre o acadêmico</label>
                            <textarea class="form-control" type="text" id="sobre" name="sobre" value="<?php echo $row['sobre']?>"><?= $row['sobre']?></textarea>
                        </div>

                        <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>">

                        <div class="text-right my-3">
                            <input class="btn btn-primary" type="submit" value="Alterar">
                            <a class="btn btn-info" href="memorial.php">Voltar</a>
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