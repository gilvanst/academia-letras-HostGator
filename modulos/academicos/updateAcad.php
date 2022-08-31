<?php
include '../../config.php';

if (!empty($_POST)) {
    $id = $_POST['idAcad'];
    $nome = $_POST['nomeAcad'];
    $cadeira = $_POST['cadeiraAcad'];
    $posicao = $_POST['posicaoAcad'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE academicos SET nomeAcad = ?, cadeiraAcad = ?, posicaoAcad = ? WHERE idAcad = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $cadeira, $posicao, $id));
    Banco::desconectar();

    header("Location: academicos.php");
}
