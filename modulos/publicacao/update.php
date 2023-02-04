<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_POST)) {
    $id      = $_POST['IdPub'];
    $titulo  = $_POST['tituloPub'];
    $autores = $_POST['autoresPub'];
    $genero  = $_POST['generoPub'];
    $texto   = $_POST['textoPub'];
    $poema   = $_POST['poema'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE publicacoes SET tituloPub = ?, autoresPub = ?, generoPub = ?, textoPub = ?, poema = ? WHERE IdPub = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($titulo, $autores, $genero, $texto, $poema, $id));
    Banco::desconectar();

    header("Location: visualizar.php?IdPub=$id");
}
