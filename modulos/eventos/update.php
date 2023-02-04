<?php
session_start();
include '../../config.php';
verificaAcesso();


if (!empty($_POST)) {
    $id        = $_POST['idEve'];
    $nome      = $_POST['nomeEve'];
    $local     = $_POST['localEve'];
    $data      = $_POST['dataEve'];
    $hora      = $_POST['horaEve'];
    $descricao = $_POST['descricaoEve'];

    $imagem    = '';

    // foto e PDF
    if (!empty($_FILES['imagemEve'])) {
        $pasta_upload = '../../img/'; // ESPECIFICANDO O LOCAL EM QUE AS IMAGENS VÃO SER SALVAR
        $extensao = substr($_FILES['imagemEve']['name'], -4); // PEGANDO A EXTESÃO DA IMAGEM
        $nome_imagem = $_POST['nomeEve'] . date('dmYhmis') . $extensao; // JUNTA O NOME DO TITULO COM A EXTENSÃO
        $imagem_final = $pasta_upload . $nome_imagem;

        $imagem = move_uploaded_file($_FILES['imagemEve']['tmp_name'], $imagem_final) ? $nome_imagem : '';

        $academico = retornaDado("SELECT imagemEve FROM eventos WHERE idEve = $id");
        apagaArquivo($academico['imagemEve']);
    }

 

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE eventos SET 
            nomeEve      = :nome, 
            descricaoEve = :descricao,";

    if (!empty($imagem)) {
        $sql .= "imagemEve = :imagem, ";
    }


    $sql .= "localEve = :local,
            dataEve   = :data,
            horaEve   = :hora 
        WHERE 
            idEve     = :id";

    $q   = $pdo->prepare($sql);

    $dados = [
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':local' => $local,
        ':data' => $data,
        ':hora' => $hora,
        ':id' => $id
    ];


    if (!empty($imagem)) {
        $dados[':imagem'] = $imagem;
    }


    $q->execute($dados);

    Banco::desconectar();

    header("Location: visualizar.php?idEve=$id");
}
