<?php
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
        header("Location: inserir.php?msg=Email já existe porra! Bota outro seu burro!&email={$email}");
        exit();
    }
     /* Fim da verificação*/

    if (!empty($_POST)) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $csenha   = $_POST['csenha']; /* Variavel criada para verficação de senha*/

        /*Verificando se as senhas são iguais e criando uma frase de verificação*/
        if ($senha != $csenha) {
            header("Location: inserir.php?msg=As senhas não estão iguais! Acéfalo.&nome={$nome}");
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
