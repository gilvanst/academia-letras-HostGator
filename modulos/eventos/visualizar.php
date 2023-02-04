<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_GET['idEve'])) {
    $id = $_GET['idEve'];
}

$sql = 'SELECT * FROM eventos where idEve= ' . $id . ' ';
$evento = retornaDado($sql);

foreach (retornaDado($sql) as $row) {
    $id = $evento['idEve'];
    $nome = $evento['nomeEve'];
    $local = $evento['localEve'];
    $data = $evento['dataEve'];
    $hora = $evento['horaEve'];
    $descricao = $evento['descricaoEve'];
    $imagem = $evento['imagemEve'];
} 

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
                    <h1 class="display-4 text-center"><?= $evento['nomeEve'] ?></h1>

                    <img src="../../img/<?= $evento['imagemEve'] ?>"  class=" align-self-start mr-3 rounded" width="200px" height="288px" >

                    <div class="text-left my-3 ">
                        <p>local: <?= $evento['localEve']?></p>
                        <p>data: <?= $evento['dataEve']?></p>
                        <p>horário <?= $evento['horaEve']?></p>


                    </div>

                    <div class="text-justify">
                        <p><?=$evento['descricaoEve']?></p>
                    </div>




                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterar.php?idEve=<?= $evento['idEve'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?idEve=<?= $evento['idEve'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="eventos.php?idEve=<?= $evento['idEve'] ?>">Voltar</a>
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