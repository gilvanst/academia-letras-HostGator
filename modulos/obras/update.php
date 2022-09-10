<?php
include '../../config.php';


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
    $imagem  = $_POST['imagemObra'];
    $pdf     = $_POST['pdfObra'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE obra SET 
            tituloObra = :titulo, 
            sinopseObra = :sinopse,";

    if(!empty($imagem)){
        $sql .= "imagemObra = :imagem, ";
    }

    if(!empty($pdf)){
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

    if(!empty($imagem)){
       $dados[':imagem'] = $imagem;
    }

    if(!empty($pdf)){
        $dados[':pdf'] = $pdf;
    }

    $q->execute($dados);

    Banco::desconectar();

    header("Location: visualizar.php?idObra=$id");
}
