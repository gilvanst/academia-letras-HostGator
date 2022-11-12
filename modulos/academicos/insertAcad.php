<?php
    include '../../config.php';

    verificaAcesso();

    $pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
    $extensao = substr($_FILES['fotoAcad']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
    $nome_imagem = $_POST['nomeAcad'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
    $imagem_final = $pasta_upload . $nome_imagem;

    $imagem = move_uploaded_file($_FILES['fotoAcad']['tmp_name'], $imagem_final) ? $nome_imagem : '';

    $nome = $_POST['nomeAcad'];
    $cadeira = $_POST['cadeiraAcad'];
    $posicao = $_POST['posicaoAcad'];
    $sobre = $_POST['sobreAcad'];


    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO academicos (nomeAcad, cadeiraAcad, posicaoAcad, sobreAcad, fotoAcad) VALUES (?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $cadeira, $posicao, $sobre, $imagem));

    $id = $pdo->lastInsertId();

    Banco::desconectar();

    if(!empty($id)){
        header("Location: visualizar.php?idAcad=$id");
    }else{
        header('Location: inserir.php');
    }