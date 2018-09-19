<?php

include "../clases/conexion.php";
include "../clases/pais.php";

$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
 echo $objPais->editar($conexion, $_POST['id'], $_POST['nombre'], $_POST['poblacion'],$_POST['moneda'],
$_POST['capital']);
