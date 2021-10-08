<?php

class BD
{
    public static $servidor = 'localhost';
    public static $database = 'projeto_igreja';
    public static $usuario = 'root';
    public static $senha = '';

    public static function conectar()
    {
        $pdo = new PDO("mysql:host=". self::$servidor .";dbname=". self::$database, self::$usuario , self::$senha);
        return $pdo;
    }
}