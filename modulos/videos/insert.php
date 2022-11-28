<?php
include '../../config.php';
verificaAcesso();


$nome = $_POST['nome'];
$sobre = $_POST['sobre'];

$link = $_POST['link'];

if(empty($nome)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($sobre)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($link)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO  videos  (nome, sobre, link) VALUES (?,?,?)";
$q = $pdo->prepare($sql);
$q->execute(array( $nome, $sobre, $link));

$id = $pdo->lastInsertId();

Banco::desconectar();

if(!empty($id)){
    header("Location: visualizar.php?id=$id");
}else{
    header('Location: inserir.php');
}