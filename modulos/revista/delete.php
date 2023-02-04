<?php
session_start();
include '../../config.php';

verificaAcesso();

if (!empty($_GET)) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];

    // Pega as informações da obra no banco de dados
    $sql = "SELECT id, pdf FROM revista where id = $id";
    $revista = retornaDado($sql);

    apagaArquivo($revista['pdf']);
    

    //Delete do banco:
    $sql = "DELETE FROM revista where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . arquivo('modulos/revista/revista.php'));
}
