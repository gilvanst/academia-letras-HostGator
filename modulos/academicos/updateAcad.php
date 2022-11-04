<?php
include '../../config.php';


if (!empty($_POST)) {
    $id      = $_POST['idAcad'];
    $nome  = $_POST['nomeAcad'];
    $cadeira = $_POST['cadeiraAcad'];
    $posicao    = $_POST['posicaoAcad'];
    $sobre     = $_POST['sobreAcad'];

    // foto e PDF
    $foto  = $_POST['fotoAcad'];

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE academicos SET 
            nomeAcad = :nome, 
            sobreAcad = :sobre,";

    if(!empty($foto)){
        $sql .= "fotoAcad = :foto, ";
    }

    $sql .= "cadeiraAcad = :cadeira, 
            posicaoAcad = :posicao, 
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
       $dados[':foto'] = $foto;
    }

    if(!empty($pdf)){
        $dados[':pdf'] = $pdf;
    }

    $q->execute($dados);

    Banco::desconectar();

    header("Location: academicos.php?idAcad=$id");
}
