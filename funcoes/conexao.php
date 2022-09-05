<?php
    $tabela = "bdaal";
    $usuario = "root";
    $senha = "";
    $host = "localhost";

    $conexaoBanco = new PDO("mysql:host={$host};dbname={$tabela};charset=utf8", $usuario, $senha);
    $GLOBALS['conexaoBanco'] = $conexaoBanco;

    //
    // Executa uma sql e retorna um dado do banco de dados
    //
    function retornaDado($sql)
    {
        $pdo = $GLOBALS['conexaoBanco'];

        $resultado = $pdo->query($sql);
        return $resultado->fetch();
    }

    //
    // Executa uma sql e retorna todos os resultados
    //
    function retornaDados($sql)
    {
        $pdo = $GLOBALS['conexaoBanco'];

        $resultado = $pdo->query($sql);
        return $resultado->fetchAll();
    }

    function apagaArquivo($arquivo)
    {
        // Verificar se existe a imagem dentro da pasta
        $imagem = path("img/{$arquivo}");
        // Verificar se existe o pdf dentro da pasta
        $pdf = path("pdf/{$arquivo}");

        // Apaga a imagem caso seja encontrada
        if(is_file($imagem))
            unlink($imagem);
        // Apaga o pdf caso seja encontrada
        if(is_file($pdf ))
            unlink($pdf);
    }
?>