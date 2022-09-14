<?php
    include '../../config.php';
    
    session_start();

    unset($_SESSION['usuario']);

    header('Location: ' . arquivo('login.php'));