
<!-- Modal -->
<div class="modal fade" id="ActualizaContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="frmActualizaContacto" method="POST">

          <label for="nombrecu">Nombre</label>
          <input type="text" id="nombrecu" name="nombrecu"  class="form-control">

          <label for="papellidocu">Primer Apellido</label>
          <input type="text" id="papellidocu" name="papellidocu"  class="form-control">

          <label for="sapellidocu">Segundo Apellido</label>
          <input type="text" id="sapellidocu" name="sapellidocu"  class="form-control">

          <label for="telefonocu">Telefono</label>
          <input type="number" id="telefonocu" name="telefonocu"  class="form-control">

          <label for="emailcu">Email</label>
          <input type="email" id="emailcu" name="emailcu"  class="form-control">

          <label for="categoriacu">Categoria</label>
          <select name="categoriacu" id="categoriacu" class="form-control">
           <option value="">Selecciona una Categoria</option>
           <option value="">Casa</option>
           <option value="">Empresa</option>
          </select>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>