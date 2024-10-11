<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/Coche.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/Marca.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/User.php';

$rutaListMarcas = $_SERVER['DOCUMENT_ROOT'] . '/TiendaCochesClasess/Control/listadomarcas.php';
echo $rutaListMarcas;
echo '<a href="' . $rutaListMarcas . '">Ver lista de marcas</a>';

?>