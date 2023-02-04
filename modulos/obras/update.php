<?php
session_start();
include '../../config.php';
verificaAcesso();


if (!empty($_POST)) {
    $id      = $_POST['idObra'];
    $titulo  = $_POST['tituloObra'];
    $sinopse = $_POST['sinopseObra'];
    $isbn    = $_POST['isbnObra'];
    $ano     = $_POST['anoObra'];
    $paginas = $_POST['paginasObra'];
    $link    = $_POST['linkObra'];
    $genero  = $_POST['generoObra'];

    // Imagem e PDF
    $imagem  = '' ;
    $pdf     = '';

    if (!empty($_FILES['imagem'])) {
        $pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
        $extensao = substr($_FILES['imagem']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
        $nome_imagem = $_POST['tituloObra'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
        $imagem_final = $pasta_upload . $nome_imagem;

        $imagem = move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem_final) ? $nome_imagem : '';

        $obra = retornaDado("SELECT imagemObra FROM obra WHERE idObra = $id");
        apagaArquivo($obra['imagemObra']);
    }

    if (!empty($_FILES['pdfObra'])) {
        $pasta_upload = '../../pdf/'; // ESPECIFICANDO O LOCAL EM QUE OS ARQUIVOS PDF VÃO SER SALVAS
        $extensao = substr($_FILES['pdfObra']['name'], -4); // PEGANDO A EXTESÃO DO ARQUIVO
        $nome_pdf = $_POST['tituloObra'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
        $pdf_final = $pasta_upload . $nome_pdf;

        $imagem = move_uploaded_file($_FILES['pdfObra']['tmp_name'], $imagem_final) ? $nome_imagem : '';

        $obra = retornaDado("SELECT pdfObra FROM obra WHERE idObra = $id");
        apagaArquivo($obra['pdfObra']);
    }

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE obra SET 
            tituloObra = :titulo, 
            sinopseObra = :sinopse,";

    if (!empty($imagem)) {
        $sql .= "imagemObra = :imagem, ";
    }

    if (!empty($pdf)) {
        $sql .= "pdfObra = :pdf ,";
    }

    $sql .= "isbnObra = :isbn, 
            anoObra = :ano, 
            paginasObra = :paginas, 
            linkObra = :link, 
            generoObra = :genero  
        WHERE 
            idObra = :id";

    $q   = $pdo->prepare($sql);

    $dados = [
        ':titulo' => $titulo,
        ':sinopse' => $sinopse,
        ':isbn' => $isbn,
        ':ano' => $ano,
        ':paginas' => $paginas,
        ':link' => $link,
        ':genero' => $genero,
        ':id' => $id
    ];

    if (!empty($imagem)) {
        $dados[':imagem'] = $imagem;
    }

    if (!empty($pdf)) {
        $dados[':pdf'] = $pdf;
    }

    $q->execute($dados);

    Banco::desconectar();

    header("Location: visualizar.php?idObra=$id");
}
