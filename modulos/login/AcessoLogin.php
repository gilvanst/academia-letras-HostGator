<?php
session_start();
    include_once '../../config.php';

    // Dados
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Busca o usuário com email e senha
    $sql = "SELECT id, email, senha FROM usuario WHERE email = '$email'";
    $usuario = retornaDado($sql);

    if(!empty($usuario['id'])){
        // Existe um usuário
        if($usuario['senha'] != $senha){
            // Senha ta errada. Volta pro login e destroi a sessão]
            $mensagem = "Senha não confere!";
            header('Location: ' . arquivo('login.php?mensagem=' . $mensagem));
        }else{
            // Senha ta certa. Salva a sessão e redireciona pra home.
            $_SESSION['id'] = $usuario['id'];
            header('Location: ' . arquivo('modulos/painel/painel.php'));
        }
    }else{
        // Não existe um usuário com esse email
        $mensagem = "Email não existe!";
        header('Location: ' . arquivo('login.php?mensagem=' . $mensagem));
    }