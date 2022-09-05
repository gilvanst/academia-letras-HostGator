<?php
include '../../config.php';

$pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
$extensao = substr($_FILES['imagem']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
$nome_imagem = $_POST['tituloObra'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
$imagem_final = $pasta_upload . $nome_imagem;

$pasta_upload = '../../pdf/'; // ESPECIFICANDO O LOCAL EM QUE OS ARQUIVOS PDF VÃO SER SALVAS
$extensao = substr($_FILES['pdfObra']['name'], -4); // PEGANDO A EXTESÃO DO ARQUIVO
$nome_pdf = $_POST['tituloObra'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
$pdf_final = $pasta_upload . $nome_pdf;


$imagem = move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem_final) ? $nome_imagem : '';
$pdf = move_uploaded_file($_FILES['pdfObra']['tmp_name'], $pdf_final) ? $nome_pdf : '';

if (!empty($_POST)) {
    $id      = $_POST['idObra'];
    $titulo  = $_POST['tituloObra'];
    $sinopse = $_POST['sinopseObra'];
    $imagem  = $_POST['imagemObra'];
    $isbn    = $_POST['isbnObra'];
    $ano     = $_POST['anoObra'];
    $paginas = $_POST['paginasObra'];
    $pdf     = $_POST['pdfObra'];
    $link    = $_POST['linkObra'];
    $genero  = $_POST['generoObra'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE obra SET tituloObra = ?, sinopseObra = ?, imagemObra = ?, isbnObra = ?, anoObra = ?, paginasObra = ?, pdfObra = ?, linkObra = ?, generoObra = ?  WHERE idObra = ?";
    $q   = $pdo->prepare($sql);
    $q->execute(array($titulo, $sinopse, $imagem, $isbn, $ano, $paginas, $pdf, $link, $genero, $id));

    $id = $pdo->lastInsertId();
    
    Banco::desconectar();

    header("Location: visualizar.php?idObra=$id");
}
