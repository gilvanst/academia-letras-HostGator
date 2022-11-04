<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';
include_once '../login/sessao.php';
if (empty($_SESSION['usuario'])) {
    header('Location: ' . arquivo('login.php'));
    exit;
}

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
             

                    <div class="container">

                        <div class="row">
                            
                            <div class="col-sm ">
                                <div class="d-flex mb-3">
                                    
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Meus dados</h5>
                                            <img class="img-profile rounded-circle mb-5 " src="<?= arquivo('img/undraw_profile.svg') ?>">
                                            
                                            <h6 class="card-title">Nome: <?= $perfil['nome'] ?></h6>
                                            <h6 class="card-title">Email: <?= $perfil['email'] ?></h6>
                                            <h6 class="card-title">Telefone:<?= $perfil['telefone'] ?></h6>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="../usuarios/alterar.php?id=<?= $perfil['id'] ?>" class="btn btn-primary">alterar</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="d-flex mb-3">

                                    <div class="card" style="width: 50rem;">
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