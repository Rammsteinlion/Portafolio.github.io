<?php 


require_once '../../clases/categorias.php';

$datos = array(
    'idCategoria' => (isset($_POST['idCategoria'])) && (!empty($_POST['idCategoria'])),
    'nombre' => (isset($_POST['nombrecategoriau'])) && (!empty($_POST['nombrecategoriau'])),
    'descripcion' => (isset($_POST['descripcionu'])) && (!empty($_POST['descripcionu']))
);

$categorias = new Categorias();
echo $categorias->actualizaCategoria($datos);