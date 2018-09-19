<?php
class pais
{
    public function registrar($conexion, $nombre,$poblacion, $moneda,$capital)
    {
        $query = "insert into pais ( nombre, poblacion, moneda, capital)
        values('$nombre', $poblacion, '$moneda','$capital' )";
        $consulta = mysqli_query($conexion, $query);

        if($consulta)
        {
            $respuesta = "pais  registrado";
        }
        else
        {
            $respuesta = " problemas al registrar";
        }
        return $respuesta;
    }

    public function consultar($conexion)
    {
        $query = "select * from pais";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion,$id)
    {
        $query = "select * from pais  where id=$id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $id, $nombre, $poblacion, $moneda, $capital)
    {
        $query = "UPDATE pais SET nombre = '$nombre', poblacion = $poblacion,
        moneda = '$moneda',  capital = '$capital'where id = $id";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta)
        {
            $respuesta = "pais actualizado";
            
        }
        else
        {
            $respuesta = "problemas al registrar";
        }
        return $respuesta;
   

    }
    public function eliminar($conexion, $id)
    {
        $query = "DELETE FROM pais WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta)
        {
            $respuesta = "pais eliminado";

        }
        else
        {
            $respuesta = "problemas al eliminar";
        }
        return $respuesta;
    }
     
}