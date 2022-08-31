<?php
include '../../config.php';


if (!empty($_POST)) {
    $nome = $_POST['nomeAcad'];
    $cadeira = $_POST['cadeiraAcad'];
    $posicao = $_POST['posicaoAcad'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO academicos (nomeAcad, cadeiraAcad, posicaoAcad) VALUES (?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $cadeira, $posicao));
    Banco::desconectar();

    header("Location:  academicos.php");
}
