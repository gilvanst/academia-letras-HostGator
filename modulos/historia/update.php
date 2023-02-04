<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_POST)) {
    $id      = $_POST['idHis'];
    $texto  = $_POST['texto'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE historia SET texto = ? WHERE idHis = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($texto, $id));
    Banco::desconectar();

    header("Location: historia.php?idHis=$id");
}
