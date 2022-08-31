<?php
include '../../config.php';


if (!empty($_POST)) {
    $nome = $_POST['nomeEve'];
    $local = $_POST['localEve'];
    $data = $_POST['dataEve'];
    $hora = $_POST['horaEve'];
    $descricao = $_POST['descricaoEve'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO eventos (nomeEve, localEve, dataEve, horaEve, descricaoEve) VALUES (?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array( $nome, $local, $data, $hora, $descricao));
    Banco::desconectar();

    header("Location:  eventos.php");
}
