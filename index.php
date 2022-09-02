<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <title>Tela De Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            
        }

        .bodyf {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;

        }

        .inputSubmit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
            cursor: pointer;
        }

     
    </style>
</head>
teste aqui
<body class="bg-gradient-primary">
    <div class="bodyf">
        <div class="text-center">
            <h1>Login</h1>
        </div>
        <form class="user" action="modulos/login/AcessoLogin.php" method="POST">
            <div class="form-group">
                <input class="form-control form-user" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control form-user" type="password" name="senha" placeholder="Senha">

            </div>

            <input class="inputSubmit btn-user" type="submit" name="submit" value="Entrar">

        </form>
        <div class="text-center">
            <a class="small" href="redefinir.php">Esqueceu a senha?</a>

        </div>
    </div>

</body>

</html>