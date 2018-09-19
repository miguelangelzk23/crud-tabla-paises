<?php
    include "clases/conexion.php";
    include "clases/pais.php";

    $objConexion = new conexion();
    $objPais = new pais();

     $conexion = $objConexion->conectar();
     $paises = $objPais->consultar($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="body_consultar">
    <table class="tabla" >
        <tr>
            <th>Nombre</th>
            <th>Poblacion</th>
            <th>Moneda</th>
            <th>Capital</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
   
    <?php
        while($pais = mysqli_fetch_array($paises)){
    ?>
        <tr>
            <td><?php echo $pais['nombre'] ?></td>
            <td><?php echo $pais['poblacion'] ?></td>
            <td><?php echo $pais['moneda'] ?></td>
            <td><?php echo $pais['capital'] ?></td>
            <
            <td><a href="editar.php?id=<?php echo $pais['id'] ?>">Editar</a></td>
            <td><a href="controlador/eliminar.php?id=<?php echo $pais['id']?>">Eliminar</a></td>
            
        </tr>
        
    <?php
        }
    ?>
      </table>
      <a href="index.html"> <button> menu</button></a>
</body>
</html>