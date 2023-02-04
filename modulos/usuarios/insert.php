<?php
session_start();
    include '../../config.php';
    verificaAcesso();
   
    $nome       = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email      = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $telefone   = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha   = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    /* Faz a merda do select e verifica se o email já existe no banco de dados esse inferno */

    $sqlEmail = "SELECT * FROM usuario WHERE email = '{$_POST['email']}' ";
    $usuarioEmail = retornaDado($sqlEmail);

    if (!empty($usuarioEmail['id']) ) {
        header("Location: inserir.php?msg=Email já cadastrado! Por favor, coloque outro.&email={$email}");
        exit();
    }
     /* Fim da verificação*/

    if (!empty($_POST)) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];
        $csenha   = $_POST['csenha']; /* Variavel criada para verficação de senha*/

        /*Verificando se as senhas são iguais e criando uma frase de verificação*/
        if ($senha != $csenha) {
            header("Location: inserir.php?msg=Senhas precisam estar iguais!&nome={$nome}");
            exit();
        }
        /*fim da verificação*/
        if(empty($nome)){
            $mensagem = " campo obrigatório!";
            header('Location: ' . arquivo('modulos/usuarios/inserir.php?mensagem=' . $mensagem));
            exit();
        }
        if(empty($email)){
            $mensagem = " campo obrigatório!";
            header('Location: ' . arquivo('modulos/usuarios/inserir.php?mensagem=' . $mensagem));
            exit();
        }
        if(empty($telefone)){
            $mensagem = " campo obrigatório!";
            header('Location: ' . arquivo('modulos/usuarios/inserir.php?mensagem=' . $mensagem));
            exit();
        }
        if(empty($senha)){
            $mensagem = " campo obrigatório!";
            header('Location: ' . arquivo('modulos/usuarios/inserir.php?mensagem=' . $mensagem));
            exit();
        }
        if(empty($csenha)){
            $mensagem = " campo obrigatório!";
            header('Location: ' . arquivo('modulos/usuarios/inserir.php?mensagem=' . $mensagem));
            exit();
        }

        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nome, email, telefone, senha ,tipo ) VALUES (?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($nome, $email, $telefone, $senha, $tipo));
        Banco::desconectar();

        header("Location:  usuarios.php");
    }
