<?php
    define('ROOT_PATH', 'http://localhost/academia-letras/');
    define('ROOT_DIR', __DIR__);

    // Include dos arquivos comuns
    include_once path('funcoes/conexao.php');
    include_once path('funcoes/banco.php');

  

    // Funções
    function arquivo($file)
    {
        return ROOT_PATH . $file;
    }
    
    function path($file)
    {
        return ROOT_DIR . '/' . $file;
    }

    function usuario()
    {
        // Retorna o usuário logado;
        
        $id = $_SESSION['usuario'];

        $sql = "SELECT * FROM usuario WHERE id = $id";
        $query = $GLOBALS['conexaoBanco']->query($sql);

        return $query->fetch();
    }