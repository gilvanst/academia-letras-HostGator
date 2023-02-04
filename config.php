<?php

define('ROOT_PATH', 'https://aracaletras.com.br/');
define('ROOT_DIR', __DIR__);

include_once path('modulos/login/sessao.php');

// Include dos arquivos comuns
include_once path('funcoes/conexao.php');
include_once path('funcoes/banco.php');
include_once path('funcoes/funcoes.php');





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

function getYoutubeCode($link)
{
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
    return $match[1];
}

function getEmbedLink($url)
{
    $code = getYoutubeCode($url);
    return "https://www.youtube.com/embed/$code";
}
