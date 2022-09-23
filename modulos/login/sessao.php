<?php
session_start();
    if (empty($_SESSION['usuario'])) {
        header('Location: ' . arquivo('login.php'));
        exit;
    }
    