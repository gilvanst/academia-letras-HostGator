<?php
session_start();
include '../../config.php';

verificaAcesso();

if (!empty($_GET)) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];

    // Pega as informações da obra no banco de dados
    $sql = "SELECT id, foto FROM memorial where id = $id";
    $memorial = retornaDado($sql);

    apagaArquivo($memorial['foto']);

    //Delete do banco:
    $sql = "DELETE FROM memorial where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . arquivo('modulos/memorial/memorial.php'));
}
