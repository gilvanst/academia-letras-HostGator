<?php
include '../../config.php';

if (!empty($_POST)) {
    $id = $_POST['idEve'];
    $nome = $_POST['nomeEve'];
    $local = $_POST['localEve'];
    $data = $_POST['dataEve'];
    $hora = $_POST['horaEve'];
    $descricao = $_POST['descricaoEve'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE eventos SET nomeEve = ?, localEve = ?, dataEve = ?, horaEve = ?, descricaoEve = ? WHERE idEve = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $local, $data, $hora, $descricao, $id));
    Banco::desconectar();

    header("Location: eventos.php");
}
