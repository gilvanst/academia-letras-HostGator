<?php
session_start();
include '../../config.php';

verificaAcesso();

if (!empty($_GET)) {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['idEve'];

    // Pega as informações da obra no banco de dados
    $sql = "SELECT idEve, imagemEve FROM eventos where idEve = $id";
    $evento = retornaDado($sql);

    apagaArquivo($evento['imagemEve']);
    

    //Delete do banco:
    $sql = "DELETE FROM eventos where idEve = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . arquivo('modulos/eventos/eventos.php'));
}
