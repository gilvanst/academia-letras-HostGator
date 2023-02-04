<?php
session_start();

include '../../config.php';

    verificaAcesso();
    


if (!empty($_GET['idAcad'])) {
    $id = $_GET['idAcad'];
}


$sql = 'SELECT * FROM academicos where idAcad= ' . $id . ' ';
$acad = retornaDado($sql);

foreach (retornaDado($sql) as $row) {
    $id = $acad['idAcad'];
    $nome = $acad['nomeAcad'];
    $cadeira = $acad['cadeiraAcad'];
    $posicao = $acad['posicaoAcad'];
    $sobre = $acad['sobreAcad'];
    $foto = $acad['fotoAcad'];
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
                    <h1 class="display-4 text-center"><?= $acad['nomeAcad'] ?></h1>

                    <div class="row-flex">
                        <img src="../../img/<?= $acad['fotoAcad'] ?>" download class=" align-self-start mr-3 rounded" width="200px" height="288px" alt="Capa do livro">
                        <div class="media-body  mt-3">
                            <p>nome: <?= $acad['nomeAcad'] ?></p>
                            <p>cadeira:<?= $acad['cadeiraAcad'] ?></p>
                            <p>posicao: <?= $acad['posicaoAcad'] ?></p>


                        </div>
                    </div>

                    <div class="text-justify mt-5">
                        <p>Sobre:</p>
                        <i><?= $acad['sobreAcad'] ?></i>
                    </div>




                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterarAcad.php?idAcad=<?= $acad['idAcad'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="deleteAcad.php?idAcad=<?= $acad['idAcad'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="academicos.php?idAcad=<?= $acad['idAcad'] ?>">Voltar</a>
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