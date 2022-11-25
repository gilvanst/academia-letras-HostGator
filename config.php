<?php
define('ROOT_PATH', 'http://localhost/academia-letras/');
define('ROOT_DIR', __DIR__);

// Include dos arquivos comuns
include_once path('funcoes/conexao.php');
include_once path('funcoes/banco.php');
include_once path('funcoes/funcoes.php');
include_once path('modulos/login/sessao.php');

session_start();


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

    $id = $_SESSION['id'];

    $sql = "SELECT * FROM usuario WHERE id = $id";
    $query = $GLOBALS['conexaoBanco']->query($sql);

    return $query->fetch();
}

function url()
{
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }
    
    $sql = 'SELECT * FROM videos where id= ' . $id . ' ';
    $video = retornaDado($sql);

    $url = $video['link'];
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
    echo $my_array_of_vars['v'];
    // Output: C4kxS1ksqtw
}
