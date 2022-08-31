<?php

class Banco
{
    private static $dbNome = 'bdaal';
    private static $dbHost = '127.0.0.1';
    //private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';


    private static $cont = null;

    public function __construct()
    {
        die('A função Init nao é permitido!');
    }

    public static function conectar()
    {
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbNome . ";" . "charset=utf8", self::$dbUsuario, self::$dbSenha);
            } catch (PDOException $exception) {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}
