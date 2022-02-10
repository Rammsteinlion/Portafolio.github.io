<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmActualizaCategoria" method="POST">

                <input type="text" name="idCategoria" id="idCategoria" hidden="">

                <label for="nombrecategoriau">Nombre</label>
                <input type="text" id="nombrecategoriau" name="nombrecategoriau" class="form-control"/>
                <label for="descripcionu">Descripcion</label>
                <input type="text" id="descripcionu" name="descripcionu" class="form-control"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning" id="btnActualizarCategoria">Actualizar</button>
            </div>
        </div>
    </div>
</div>