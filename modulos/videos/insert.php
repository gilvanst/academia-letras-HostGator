<?php
session_start();
    include '../../config.php';
    verificaAcesso();

    $nome = $_POST['nome'];
    $sobre = $_POST['sobre'];
    $link = $_POST['link'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO  videos  (nome, sobre, link) VALUES (?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array( $nome, $sobre, $link));

    $id = $pdo->lastInsertId();

    Banco::desconectar();

    if(!empty($id)){
        header("Location: visualizar.php?id=$id");
    }else{
        header('Location: inserir.php');
    }