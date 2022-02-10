<?php 


require_once '../../clases/categorias.php';
$idCategoria = $_POST['idCategoria'];
$categorias = new Categorias();

//este arreglo lo convierta en una cadena json 
echo json_encode($categorias->obtenerDatos($idCategoria));