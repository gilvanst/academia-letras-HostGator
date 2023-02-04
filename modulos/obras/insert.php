<?php
session_start();
include '../../config.php';
verificaAcesso();

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


$titulo = $_POST['tituloObra'];
$autores = $_POST['autoresObra'];
$sinopse = $_POST['sinopseObra'];
$isbn = $_POST['isbnObra'];
$ano = $_POST['anoObra'];
$paginas = $_POST['paginasObra'];
$link = $_POST['linkObra'];
$genero = $_POST['generoObra'];

if(empty($titulo)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($autores)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($sinopse)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($isbn)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($ano)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($paginas)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($link)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}
if(empty($genero)){
    $mensagem = " campo obrigatório!";
    header('Location: ' . arquivo('modulos/obras/inserir.php?mensagem=' . $mensagem));
    exit();
}

$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO obra (tituloObra, autoresObra, sinopseObra, imagemObra, isbnObra, anoObra, paginasObra, pdfObra, linkObra, generoObra) VALUES (?,?,?,?,?,?,?,?,?,?)";
$q = $pdo->prepare($sql);
$q->execute(array($titulo, $autores, $sinopse, $imagem, $isbn, $ano, $paginas, $pdf, $link, $genero));

$id = $pdo->lastInsertId();

Banco::desconectar();

if(!empty($id)){
    header("Location: visualizar.php?idObra=$id");
}else{
    header('Location: inserir.php');
}