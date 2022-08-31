<?php
include '../../config.php';

if (!empty($_POST)) {
    $id      = $_POST['idObra'];
    $titulo  = $_POST['tituloObra'];
    $sinopse = $_POST['sinopseObra'];
    $imagem  = $_POST['imagemObra'];
    $isbn    = $_POST['isbnObra'];
    $ano     = $_POST['anoObra'];
    $paginas = $_POST['paginasObra'];
    $pdf     = $_POST['pdfObra'];
    $link    = $_POST['linkObra'];
    $genero  = $_POST['generoObra'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE obra SET tituloObra = ?, sinopseObra = ?, imagemObra = ?, isbnObra = ?, anoObra = ?, paginasObra = ?, pdfObra = ?, linkObra = ?, generoObra = ?  WHERE idObra = ?";
    $q   = $pdo->prepare($sql);
    $q->execute(array($titulo, $sinopse, $imagem, $isbn, $ano, $paginas, $pdf, $link, $genero, $id));
    Banco::desconectar();

    header("Location: visualizar.php?idObra=$id");
}
