<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = 'SELECT * FROM videos where id = ' . $id . ' ';
$video = retornaDado($sql);

foreach (retornaDado($sql) as $row) {
    $id = $video['id'];
    $nome = $video['nome'];
    $sobre = $video['sobre'];
    $link = $video['link'];
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
                    <h1 class="display-4 text-center"> <?=$video['nome']?></h1>

                    <iframe width="560" height="315" src="<?= getEmbedLink($video['link']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="text-left my-3 ">
                        <p>edição: <?= $video['sobre']?></p>


                    </div>
 



                    <div class="text-right my-3">
                        <a class="btn btn-sm btn-warning" href="alterar.php?id=<?= $video['id'] ?>">Alterar</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $video['id'] ?>." onclick="return confirm('Deseja realmente apagar o registro?')">Excluir</a>
                        <a class="btn btn-sm btn-primary " href="videos.php?id=<?= $video['id'] ?>">Voltar</a>
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