<?php
session_start();
include '../../config.php';
    verificaAcesso();

if (!empty($_POST)) {
    $id      = $_POST['id'];
    $nome  = $_POST['nome'];
    $cadeira = $_POST['cadeira'];
    $posicao    = $_POST['posicao'];
    $sobre     = $_POST['sobre'];
    $imagem    = '';

    // foto e PDF
    if(!empty($_FILES['foto'])){
        $pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
        $extensao = substr($_FILES['foto']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
        $nome_imagem = $_POST['nome'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
        $imagem_final = $pasta_upload . $nome_imagem;
    
        $imagem = move_uploaded_file($_FILES['foto']['tmp_name'], $imagem_final) ? $nome_imagem : '';

        $memorial = retornaDado("SELECT foto FROM memorial WHERE id = $id");
        apagaArquivo($memorial['foto']);
    }

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE memorial SET 
            nome = :nome, 
            sobre = :sobre,";

    if(!empty($imagem)){
        $sql .= "foto = :foto, ";
    }

    $sql .= "cadeira = :cadeira, 
            posicao = :posicao
        WHERE 
            id = :id";

    $q   = $pdo->prepare($sql);

    $dados = [
        ':nome' => $nome,
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

    header("Location: visualizar.php?id=$id");
}
