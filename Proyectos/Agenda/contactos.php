<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="public/img/icono/icons8-nuevo-contacto-64.png" sizes="64x64">
    <?php include_once "dependencias.php"; ?>
    <title>Contactos</title>
</head>

<body>
    <div class="container">
        <?php include_once "menu.php"; ?>
        <div class="jumbotron">
            <h1 class="display-4">Contactos</h1>
            <button class="btn btn-primary"  data-toggle="modal" data-target="#AgregaContacto">
                <span class="fas fa-user-plus"></span>
                Agregar Contacto</button>
            <hr class="my-4">
            <div id="cargaTablaContacto"></div>
        </div>
    </div>
    <?php 

    require_once 'vistas/contactos/modalAgregar.php';
    require_once 'vistas/contactos/modalActualizar.php';

    ?>

    <script src="public/js/contactos.js"></script>
</body>
</html>