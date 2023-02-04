<?php
session_start();
    include '../../config.php';
    
    

    unset($_SESSION['usuario']);

    header('Location: ' . arquivo('login.php'));