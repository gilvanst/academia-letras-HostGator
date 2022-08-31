<?php

$tabela = "bdaal";
$usuario = "root";
$senha = "";
$host = "localhost";

$conexaoBanco = new PDO("mysql:host={$host};dbname={$tabela};charset=utf8", $usuario, $senha);
$GLOBALS['conexaoBanco'] = $conexaoBanco;


?>