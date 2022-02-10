<?php
require_once "../../clases/Contacto.php";
$contacto = new Contacto();



$datos = array (
    "id_categoria"=>$_POST['idCategoriaSelect'],
    "nombre" => $_POST['nombrec'],
    "primer_apellido"  => $_POST['papellidoc'],
    "segundo_apellido" => $_POST['sapellidoc'],
    "email" => $_POST['emailc'],
    "telefono" => $_POST['telefonoc']
);

if (isset($datos)) {
    echo $contacto->agregaContacto($datos);
}else{
    echo "<h2>Error</h2>";
}


