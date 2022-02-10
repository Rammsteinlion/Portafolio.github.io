$(document).ready(function() {
    $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');

    $('#btnGuardarCategoria').click(function() {
        agregaCategoria();
        validarFormVacio();
    });

    $('#btnActualizarCategoria').click(function() {
        actualizaDatosCategoria();
        validarFormVacio();
    });
});

function validarFormVacio(formulario) {
    datos = $('#' + formulario).serialize();
    datos = $('#' + formulario).serialize();
    d = datos.split('&');
    vacios = 0;
    for (i = 0; i < d.length; i++) {
        controles = d[i].split("=");
        if (controles[1] == "A" || controles[1] == "") {
            vacios++;
        }
    }
    return vacios;
}


function agregaCategoria() {

    $.ajax({
        type: "POST",
        data: $('#frmAgregaCategoria').serialize(),
        url: "procesos/categorias/agregaCategoria.php",
        success: function(r) {
            //evitar espacios en blanco
            r = r.trim();
            if (r == 1) {
                $('#frmAgregaCategoria')[0].reset();
                $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                $('#modalAgregarCategoria').modal("toggle");
                swal("Bien hecho", "Categoria Agregada", "success");
            } else {
                swal("Error", "No se guardo categoria", "error");
            }
        }
    });
}


function eliminarCategoria(idCategoria) {
    swal({
            title: "Estas seguro?",
            text: "Una vez eliminado no se recuperara el registro",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    data: "idCategoria=" + idCategoria,
                    url: "procesos/categorias/eliminaCategoria.php",
                    success: function(respuesta) {
                        respuesta = respuesta.trim();
                        if (respuesta == 1) {
                            $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                            swal("Bien hecho", "Categoria Eliminada ", "success");
                        } else {
                            swal("Error", "No se guardo eliminar", "error");
                        }
                    }

                });
            }
        });
}



function obtenerDatosCategoria(idCategoria) {
    $.ajax({
        type: "post",
        data: "idCategoria=" + idCategoria,
        url: 'procesos/categorias/obtenerDatosCategoria.php',
        success: function(r) {
            r = jQuery.parseJSON(r);
            $('#idCategoria').val(r['idCategoria']);
            $('#nombrecategoriau').val(r['nombre']);
            $('#descripcionu').val(r['descripcion']);
        }

    });
}

function actualizaDatosCategoria() {
    $.ajax({
        type: "POST",
        data: $('#frmActualizaCategoria').serialize(),
        url: "procesos/categorias/actualizaCategoria.php",
        success: function(r) {
            //evitar espacios en blanco
            r = r.trim();
            // console.log(r);
            if (r == 1) {
                //$('#frmActualizaCategoria')[0].reset();
                $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                $('#modalActualizarCategoria').modal("toggle");
                swal("Bien hecho", "Categoria Actualizada", "success");
            } else {
                swal("Error", "No se actualizo la  categoria", "error");
            }
        }
    });
}