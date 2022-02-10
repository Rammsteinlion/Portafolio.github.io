<?php 

require_once '../../clases/categorias.php';
$idCategoria = $_POST['idCategoria'];
$categorias = new Categorias();
echo $categorias->eliminaCategoria($idCategoria);