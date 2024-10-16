<?php
include_once "autocarga.php";


$rc = new RepoCoche(Conexion::getConnection());

$micoche = $rc->findById("2345KJG");
var_dump($micoche);


?>