<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="public/img/icono/icons8-grupo-de-usuario-50.png" sizes="64x64">
    <?php include_once "dependencias.php"; ?>
    <title>Categoria contactos</title>
</head>

<body>
    <div class="container">
    <?php include_once "menu.php"; ?>
    <div class="jumbotron">
            <h1 class="display-4">Categorias</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
                <span class="fas fa-folder-plus"></span>
                Nueva categoria</button>
            <hr class="my-4">
            <div id="cargaTablaCategorias"></div>
        </div>
    </div>
    <?php 
    require_once 'vistas/categorias/modalAgregar.php';
    require_once 'vistas/categorias/modalActualizar.php';
      ?>
    <script src="public/js/categorias.js"></script>
</body>
</html>