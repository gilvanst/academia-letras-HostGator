<?php
session_start();
include '../../config.php';
verificaAcesso();

$pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
$extensao = substr($_FILES['imagemEve']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
$nome_imagem = $_POST['nomeEve'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
$imagem_final = $pasta_upload . $nome_imagem;



$imagem = move_uploaded_file($_FILES['imagemEve']['tmp_name'], $imagem_final) ? $nome_imagem : '';
$nome = $_POST['nomeEve'];
$local = $_POST['localEve'];
$data = $_POST['dataEve'];
$hora = $_POST['horaEve'];
$descricao = $_POST['descricaoEve'];

if(empty($nome)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($local)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($data)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($hora)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($descricao)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}

$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO  eventos  (nomeEve, localEve, dataEve, horaEve, descricaoEve, imagemEve) VALUES (?,?,?,?,?,?)";
$q = $pdo->prepare($sql);
$q->execute(array($nome, $local, $data, $hora, $descricao, $imagem));

$id = $pdo->lastInsertId();

Banco::desconectar();

if(!empty($id)){
    header("Location: visualizar.php?idEve=$id");
}else{
    header('Location: inserir.php');
}