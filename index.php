<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/Coche.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/Marca.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/modelo/User.php';
require_once "Repositorio/RepoCoche";
require_once "Repositorio/Conexion.php";


$rc = new RepoCoche(Conexion::getConnection());

$micoche = $rc->findById("2345KJG");
var_dump($micoche);

$rutaListMarcas = $_SERVER['DOCUMENT_ROOT'] . '/TiendaCochesClasess/Control/listadomarcas.php';
echo $rutaListMarcas;
echo '<a href="' . $rutaListMarcas . '">Ver lista de marcas</a>';

?>