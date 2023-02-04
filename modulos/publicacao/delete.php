<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_GET)) {
    $id = $_GET['IdPub'];
    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM publicacoes where IdPub = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . arquivo('modulos/publicacao/publicacao.php'));
}
