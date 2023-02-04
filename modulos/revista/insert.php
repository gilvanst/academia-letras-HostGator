<?php
session_start();
include '../../config.php';
verificaAcesso();

$pasta_upload = '../../pdf/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
$extensao = substr($_FILES['pdf']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
$nome_imagem = $_POST['edicao'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
$imagem_final = $pasta_upload . $nome_imagem;



$pdf = move_uploaded_file($_FILES['pdf']['tmp_name'], $imagem_final) ? $nome_imagem : '';


$edicao = $_POST['edicao'];
$ano = $_POST['ano'];

if(empty($edicao)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($ano)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/eventos/inserir.php?mensagem=' . $mensagem));
    exit();
}

$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO  revista  (edicao, ano, pdf) VALUES (?,?,?)";
$q = $pdo->prepare($sql);
$q->execute(array( $edicao, $ano, $pdf));

$id = $pdo->lastInsertId();

Banco::desconectar();

if(!empty($id)){
    header("Location: visualizar.php?id=$id");
}else{
    header('Location: inserir.php');
}