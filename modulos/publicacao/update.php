<?php
include '../../config.php';

if (!empty($_POST)) {
    $id = $_POST['IdPub'];
    $titulo = $_POST['tituloPub'];
    $autores = $_POST['autoresPub'];
    $genero = $_POST['generoPub'];
    $texto = $_POST['textoPub'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE publicacoes SET tituloPub = ?, autoresPub = ?, generoPub = ?, textoPub = ? WHERE IdPub = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($titulo, $autores, $genero, $texto, $id));
    Banco::desconectar();

    header("Location: visualizar.php?IdPub=$id");
}
