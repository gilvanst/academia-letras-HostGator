<?php
session_start();
include '../../config.php';
    verificaAcesso();

if (!empty($_POST)) {
    $id      = $_POST['idAcad'];
    $nome  = $_POST['nomeAcad'];
    $cadeira = $_POST['cadeiraAcad'];
    $posicao    = $_POST['posicaoAcad'];
    $sobre     = $_POST['sobreAcad'];
    $imagem    = '';

    // foto e PDF
    if(!empty($_FILES['fotoAcad'])){
        $pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
        $extensao = substr($_FILES['fotoAcad']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
        $nome_imagem = $_POST['nomeAcad'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
        $imagem_final = $pasta_upload . $nome_imagem;
    
        $imagem = move_uploaded_file($_FILES['fotoAcad']['tmp_name'], $imagem_final) ? $nome_imagem : '';

        $academico = retornaDado("SELECT fotoAcad FROM academicos WHERE idAcad = $id");
        apagaArquivo($academico['fotoAcad']);
    }

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE academicos SET 
            nomeAcad = :nome, 
            sobreAcad = :sobre,";

    if(!empty($imagem)){
        $sql .= "fotoAcad = :foto, ";
    }

    $sql .= "cadeiraAcad = :cadeira, 
            posicaoAcad = :posicao
        WHERE 
            idAcad = :id";

    $q   = $pdo->prepare($sql);

    $dados = [
        ':nome' => $nome  ,
        ':sobre' => $sobre,
        ':cadeira' => $cadeira,
        ':posicao' => $posicao,
        ':id' => $id
    ];

    if(!empty($imagem)){
       $dados[':foto'] = $imagem;
    }

    $q->execute($dados);

    Banco::desconectar();

    header("Location: visualizar.php?idAcad=$id");
}
