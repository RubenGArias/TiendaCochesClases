<?php
//está logeado, tiene autorización, datos válidos?
//Obtención de datos o realizar operación array $marcas
//Actualiza vista Pintor->pintaListadoMarca($marcas). SI somos listos hacemos Pintor->pinta($arra,listado.html)
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/Vista/Pintor.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/Repositorio/RepoMarca.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/tiendacochesclasess/index.php';



$listaMarcas = RepoMarca::getListaMarcas();

Pintor::listaMarcas($listaMarcas);
?>