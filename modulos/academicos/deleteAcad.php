<?php
session_start();
include '../../config.php';

verificaAcesso();

if (!empty($_GET)) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['idAcad'];

    // Pega as informações da obra no banco de dados
    $sql = "SELECT idAcad, fotoAcad FROM academicos where idAcad = $id";
    $acad = retornaDado($sql);

    apagaArquivo($acad['fotoAcad']);

    //Delete do banco:
    $sql = "DELETE FROM academicos where idAcad = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . arquivo('modulos/academicos/academicos.php'));
}
