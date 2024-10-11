<?php
class RepoMarca {
    private static $listaMarcas = [];

    public static function init() {
        self::$listaMarcas[] = new Marca("Mercedes", "CLE 300");
        self::$listaMarcas[] = new Marca("Ferrari", "Laferrari");
    }

    public static function getListaMarcas() {
        return self::$listaMarcas;
    }
}

// Inicializar el array
RepoMarca::init();


?>
