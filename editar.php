<?php
include "clases/conexion.php";
include "clases/pais.php";

$objConexion = new conexion();
$objPais = new pais();
$conexion = $objConexion->conectar();
$datosPais = $objPais->consultarId($conexion,$_GET['id']);

$nombre;
$poblacion;
$moneda;
$capital;
$documento;


while($pais = mysqli_fetch_array($datosPais)){
    $nombre = $pais['nombre'];
    $poblacion = $pais['poblacion'];
    $moneda = $pais['moneda'];
    $capital = $pais['capital'];
    
    $id = $pais['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="controlador/editar.php" method="post" >
        <input type="hidden" name="id" value="<?php echo $id;?>">

        <label for="">Nombre</label><input  type="text" name="nombre" id="nombre" value="<?php  echo $nombre  ?>"> <p>
        <label for="">Poblacion</label><input type="bigint" name="poblacion" id="poblacion" value="<?php echo $poblacion ?>">  <p>
        <label for="">Moneda</label><input type="text" name="moneda" id="moneda" value="<?php echo $moneda ?>"> <p>
        <label for="">Capital</label><input type="text"name="capital"id="capital" value="<?php echo $capital ?>">  <p>
        
        <input type="submit" value= "Editar"> 
       
       
        <a href="index.html"> <button> menu</button></a>
</form>
</body>
</html>