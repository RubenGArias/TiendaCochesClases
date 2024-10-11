<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/Marca.php';

class Pintor {
    public static function listaMarcas($marcas) {
        foreach ($marcas as $marca) {
            echo "<br>" . $marca->muestra();
        }
    }
}
?>