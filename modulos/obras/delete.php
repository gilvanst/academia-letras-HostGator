<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_GET)) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['idObra'];

    // Pega as informações da obra no banco de dados
    $sql = "SELECT idObra, imagemObra, pdfObra FROM obra where idObra = $id";
    $obra = retornaDado($sql);

    apagaArquivo($obra['imagemObra']);
    apagaArquivo($obra['pdfObra']);

    //Delete do banco:
    $sql = "DELETE FROM obra where idObra = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . arquivo('modulos/obras/obras.php'));
}
