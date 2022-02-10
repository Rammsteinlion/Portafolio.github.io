<?php

require_once 'Conexion.php';

class Categorias extends Conexion
{

    public function agregaCategoria($datos)
    {
        $Conexion = Conexion::conectar();

        $sql = "INSERT INTO t_categoria (nombre,descripcion) 
            VALUES (?,?)";

        $query = $Conexion->prepare($sql);
        $query->bind_param(
            'ss',
            $datos['nombre'],
            $datos['descripcion']
        );


        $respuesta = $query->execute();
        return $respuesta;
    }



    public function eliminaCategoria($idCategoria)
    {
        $Conexion = Conexion::conectar();
        $sql = "DELETE FROM t_categoria WHERE id_categoria = ?";
        $query = $Conexion->prepare($sql);
        $query->bind_param('i', $idCategoria);
        $respuesta = $query->execute();
        return $respuesta;
    }

    public function obtenerDatos($idCategoria)
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT id_categoria,nombre,descripcion FROM t_categoria WHERE id_categoria = '$idCategoria'";
        $result = mysqli_query($conexion, $sql);
        $categoria = mysqli_fetch_array($result);

        //Arreglo asociativo
        $datos = array(
            "idCategoria" => $categoria['id_categoria'],
            "nombre" => $categoria['nombre'],
            "descripcion" => $categoria['descripcion']
        );
        return $datos;
    }

    public function actualizaCategoria($datos)
    {
        $Conexion = Conexion::conectar();
        $sql = "UPDATE t_categoria SET nombre=?,descripcion=? 
                                    WHERE id_categoria = ?";
        $query = $Conexion->prepare($sql);
        $query->bind_param(
            'ssi',
            $datos['nombre'],
            $datos['descripcion'],
            $datos['idCategoria']
        );

        $respuesta = $query->execute();
        return $respuesta;
    }
}
