<?php
private static con = null;

public static function getConection():PDO{
    if (con == null){
        con = new PDO("Conexión para la base de datos");
    }
    return con;
}



?>