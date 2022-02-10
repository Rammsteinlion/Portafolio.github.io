$(document).ready(function() {
    $('#cargaTablaContacto').load('vistas/contactos/tablaContactos.php');

    $('#btnGuargarContacto').click(function() {
        agregaContacto();
    });
});


function agregaContacto() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregaContacto').serialize(),
        url: "procesos/contactos/agregaContacto.php",
        success: function(r) {
            //console.log(r);
            if (r == 1) {
                $('#frmAgregaContacto')[0].reset();
                $('#cargaTablaContacto').load('vistas/contactos/tablaContactos.php');
                swal("Bien hecho", "Contacto Agregado con Exito", "success");
            } else {
                swal("Mal hecho", "Fallo al agregar Contacto", "error");
            }
        }

    });
}


function eliminarContacto() {
    swal({
            title: "Estas seguro?",
            text: "Una vez eliminado no se recuperara el registro",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Contacto Eliminado Satisfactoriamente", {
                    icon: "success",
                });
            }
        });
}