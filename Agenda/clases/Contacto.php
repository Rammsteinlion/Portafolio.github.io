<?php 

require_once 'Conexion.php';

Class Contacto extends Conexion{

public function agregaContacto($datos){
    $Conexion = Conexion::conectar();
    $sql ="INSERT INTO t_contactos(id_categoria,nombre,primer_apellido,segundo_apellido,email,telefono)
           VALUES(?,?,?,?,?,?)";
    $query = $Conexion->prepare($sql);
    $query->bind_param('isssss', $datos['id_categoria'],
                                      $datos['nombre'],
                                      $datos['primer_apellido'],
                                      $datos['segundo_apellido'],
                                      $datos['email'],
                                      $datos['telefono']);
    $respuesta = $query->execute();
    return $respuesta;                                      

}
}