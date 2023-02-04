<?php
session_start();
include '../../config.php';
verificaAcesso();


if (!empty($_POST)) {
    $id     = $_POST['id'];
    $edicao = $_POST['edicao'];
    $ano    = $_POST['ano'];

    $imagem = '';

    // foto e PDF
    if (!empty($_FILES['pdf'])) {
        $pasta_upload = '../../pdf/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
        $extensao = substr($_FILES['pdf']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
        $nome_imagem = $_POST['ano'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
        $imagem_final = $pasta_upload . $nome_imagem;

        $imagem = move_uploaded_file($_FILES['pdf']['tmp_name'], $imagem_final) ? $nome_imagem : '';

        $revista = retornaDado("SELECT pdf FROM revista WHERE id = $id");
        apagaArquivo($revista['pdf']);
    }



    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE revista SET 
            edicao      = :edicao, ";

    if (!empty($pdf)) {
        $sql .= "pdf = :pdf, ";
    }


    $sql .= "ano = :ano
        WHERE 
            id     = :id";

    $q   = $pdo->prepare($sql);

    $dados = [
        ':edicao' => $edicao,
        ':ano' => $ano,
        ':id' => $id
    ];


    if (!empty($pdf)) {
        $dados[':pdf'] = $pdf;
    }


    $q->execute($dados);

    Banco::desconectar();

    header("Location: visualizar.php?id=$id");
}
