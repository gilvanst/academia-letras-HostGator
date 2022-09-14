<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../config.php';

if (empty($_SESSION['usuario'])) {
    header('Location: ' . arquivo('login.php'));
    exit;
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = 'SELECT * FROM usuario where id ';
$obra = retornaDado($sql);

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

                    <h1 class="display-4 ">Meu perfil</h1>

                    

                        
                        <h2>Nome: <?= $obra['nome']?></h2>
                        
                 





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