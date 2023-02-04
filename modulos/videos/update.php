<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_POST)) {
    $id      = $_POST['id'];
    $nome  = $_POST['nome'];
    $sobre  = $_POST['sobre'];
    $link  = $_POST['link'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE videos SET nome = ?, sobre = ?, link = ?  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $sobre, $link, $id));
    Banco::desconectar();

    header("Location: visualizar.php?id=$id");
}
