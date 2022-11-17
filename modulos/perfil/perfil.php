<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';
verificaAcesso();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = 'SELECT * FROM usuario where id ';
$perfil = retornaDado($sql);

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

                        <div class="row g-4">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                                <div class="d-flex">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Meus dados</h5>

                                            <div class="text-center">
                                                <img class="img-profile rounded-circle mb-3 col-6" src="<?= arquivo('img/undraw_profile.svg') ?>">
                                            </div>
                                            
                                            <h4 class="text-center mb-0"><?= $perfil['tipo'] ?></h4>
                                            <h4 class="text-center mb-0"><?= $perfil['nome'] ?></h4>
                                            <p class="text-small text-muted text-center"><?= $perfil['email'] ?> - <?= $perfil['telefone'] ?></p>

                                            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                            <div class="text-right">
                                                <a href="../usuarios/alterar.php?id=<?= $perfil['id'] ?>" class="btn btn-primary btn-sm">Alterar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <div class="d-flex mb-3">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Publicações</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Alguma coisa aqui</li>
                                            <li class="list-group-item">Aqui tbm</li>
                                            <li class="list-group-item">E aqui</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link"> link</a>
                                            <a href="#" class="card-link"> link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        
                    </div>
                <!-- End of Content Wrapper -->

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Academia Araçatubense De Letras &copy; 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <?php include path('template/logout.php'); ?>

            <?php include path('template/importacoes-js.php'); ?>
</body>

</html>