<?php
session_start();
    include '../../config.php';

    verificaAcesso();

    $pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
    $extensao = substr($_FILES['foto']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
    $nome_imagem = $_POST['nome'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
    $imagem_final = $pasta_upload . $nome_imagem;

    $imagem = move_uploaded_file($_FILES['foto']['tmp_name'], $imagem_final) ? $nome_imagem : '';

    $nome = $_POST['nome'];
    $cadeira = $_POST['cadeira'];
    $posicao = $_POST['posicao'];
    $sobre = $_POST['sobre'];

    if(empty($nome)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/memorial/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($cadeira)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/memorial/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($posicao)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/memorial/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($sobre)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/memorial/inserir.php?mensagem=' . $mensagem));
        exit();
    }


    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO memorial (nome, cadeira, posicao, sobre, foto) VALUES (?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $cadeira, $posicao, $sobre, $imagem));

    $id = $pdo->lastInsertId();

    Banco::desconectar();

    if(!empty($id)){
        header("Location: visualizar.php?id=$id");
    }else{
        header('Location: inserir.php');
    }