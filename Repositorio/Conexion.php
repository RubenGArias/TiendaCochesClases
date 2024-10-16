<?php
class Conexion{
    private static $con = null;

    public static function getConnection(): PDO {
        if (self::$con == null) {
            self::$con = new PDO("mysql:host=localhost;dbname=carshops", "root", "root");
        }
        return self::$con;
    }
}




?>