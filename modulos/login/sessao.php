<?php

    function verificaAcesso($tipos = [])
    {
        if (empty($_SESSION['id'])) {
            header('Location: ' . arquivo('login.php'));
            exit;
        }

        if(empty($tipos))
            return true;

        $usuario = usuario();
        
        if(!in_array($usuario['tipo'], $tipos))
        {
            header('Location: ' . arquivo('login.php'));
            exit;
        }
    }

    function podeMostrar($tipos = [])
    {
        if(empty($tipos))
            return true;

        $usuario = usuario();

        if(!in_array($usuario['tipo'], $tipos))
        {
            return false;
        }

        return true;
    }