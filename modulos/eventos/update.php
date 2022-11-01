<?php
include '../../config.php';


if (!empty($_POST)) {
    $id        = $_POST['idEve'];
    $nome      = $_POST['nomeEve'];
    $local     = $_POST['localEve'];
    $data      = $_POST['dataEve'];
    $hora      = $_POST['horaEve'];
    $descricao = $_POST['descricaoEve'];



    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE eventos SET 
            nomeEve = :nome, 
            descricaoEve = :descricao,";

    if(!empty($imagem)){
        $sql .= "imagemEve = :imagem, ";
    }

    
    $sql .= "localEve = :local, 
            dataEve = :data, 
        WHERE 
            idEve = :id";

    $q   = $pdo->prepare($sql);

    $dados = [
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':local' => $local,
        ':data' => $data,
        ':id' => $id
    ];

    if(!empty($imagem)){
       $dados[':imagem'] = $imagem;
    }

    

    $q->execute($dados);

    Banco::desconectar();

    header("Location: eventos.php?idEve=$id");
}
