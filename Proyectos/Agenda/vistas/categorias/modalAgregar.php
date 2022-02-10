<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmAgregaCategoria" method="POST">
                <label for="nombrecategoria">Nombre</label>
                <input type="text" id="nombrecategoria" name="nombrecategoria" class="form-control"/>
                <label for="descripcion">Descripcion</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnGuardarCategoria">Guardar</button>
            </div>
        </div>
    </div>
</div>