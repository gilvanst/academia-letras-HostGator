<?php
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php
include '../../config.php';

if (empty($_SESSION['usuario'])) {
    header('Location: ' . arquivo('index.php'));
    exit;
}

?>
<?php include_once path('template/head.php'); ?>



<body>
    <form action="delete.php" method="POST">
        <div clas="modal-content">
            <div class="modal-body">Tem certeza que deseja excluir o registro?</div>
            <div class="modal-footer">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <input class="btn btn-secondary" type="submit" value="Excluir">
                <a class="btn btn-primary" href="usuarios.php">Voltar</a>
            </div>
            <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Academia Araçatubense De Letras &copy; 2022</span>
                                </div>
                            </div>
                        </footer>
        </div>

    </form>

   

    <?php include path('template/importacoes-js.php'); ?>

</body>

</html>