<?php
include '../../config.php';


if (!empty($_POST)) {
    $titulo  = $_POST['tituloPub'];
    $autores = $_POST['autoresPub'];
    $genero  = $_POST['generoPub'];
    $texto   = $_POST['textoPub'];
    $poema   = $_POST['poema'];
    $usuario = $_SESSION['usuario'];
    
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO publicacoes (tituloPub, autoresPub, generoPub, textoPub, poema, id_usuario) VALUES (?,?,?,?,?,?)";
    $q = $pdo->prepare($sql); 
    $q->execute(array( $titulo, $autores, $genero, $texto, $poema,  $usuario));
    Banco::desconectar();

    header("Location:  publicacao.php");
}
