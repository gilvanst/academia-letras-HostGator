<?php
session_start();
include '../../config.php';
verificaAcesso();

if (!empty($_POST)) {
    $titulo  = $_POST['tituloPub'];
    $autores = $_POST['autoresPub'];
    $genero  = $_POST['generoPub'];
    $texto   = $_POST['textoPub'];
    $poema   = $_POST['poema'];
 
    if(empty($titulo)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/publicacao/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($autores)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/publicacao/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($genero)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/publicacao/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($texto)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/publicacao/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    if(empty($poema)){
        $mensagem = " campo obrigatório!";
        header('Location: ' . arquivo('modulos/publicacao/inserir.php?mensagem=' . $mensagem));
        exit();
    }
    
    
    
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO publicacoes (tituloPub, autoresPub, generoPub, textoPub, poema) VALUES (?,?,?,?,?)";
    $q = $pdo->prepare($sql); 
    $q->execute(array( $titulo, $autores, $genero, $texto, $poema));

    $id = $pdo->lastInsertId();
    Banco::desconectar();

    if(!empty($id)){
        header("Location: visualizar.php?IdPub=$id");
    }else{
        header('Location: inserir.php');
    }
}
