<?php 
require_once "../../clases/categorias.php";

$datos = array(
    "nombre" => $_POST['nombrecategoria'],
    "descripcion" => $_POST['descripcion']
);

//hacer instancia y llamar el metodo de esa clase
$categorias = new Categorias();
echo $categorias->agregaCategoria($datos);