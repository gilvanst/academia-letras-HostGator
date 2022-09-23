<?php
include '../../config.php';

$sqlEmail = "SELECT * FROM usuario WHERE email = {$_POST['email']}";
$usuarioEmail = retornaDado($sqlEmail);

if ($usuarioEmail != )

if (!empty($_POST)) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $csenha   = $_POST['csenha']; /* Variavel criada para verficação de senha*/

    /*Verificando se as senhas são iguais e criando uma frase de verificação*/
    if ($senha != $csenha) {
        header("Location: inserir.php?msg=Senhas não conferem&nome={$nome}");
        exit();
    }
/*fim da verificação*/

    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (nome, email, telefone, senha) VALUES (?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($nome, $email, $telefone, $senha));
    Banco::desconectar();

    header("Location:  usuarios.php");
}
