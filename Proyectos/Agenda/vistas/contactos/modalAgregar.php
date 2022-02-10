
<!-- Modal -->
<div class="modal fade" id="AgregaContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="frmAgregaContacto" method="POST">

          <div id="categoriaId"></div>
          <label for="nombrec">Nombre</label>
          <input type="text" id="nombrec" name="nombrec"  class="form-control">

          <label for="papellidoc">Primer Apellido</label>
          <input type="text" id="papellidoc" name="papellidoc"  class="form-control">

          <label for="sapellidoc">Segundo Apellido</label>
          <input type="text" id="sapellidoc" name="sapellidoc"  class="form-control">

          <label for="telefonoc">Telefono</label>
          <input type="text" id="telefonoc" name="telefonoc"  class="form-control">

          <label for="emailc">Email</label>
          <input type="email" id="emailc" name="emailc"  class="form-control">

<!---
          <label for="categoriac">Categoria</label>
          <select name="categoriac" id="categoriac" class="form-control">
           <option value="">Selecciona una Categoria</option>
           <option value="">Casa</option>
           <option value="">Empresa</option>
          </select>
--->
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnGuargarContacto">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
  $('#categoriaId').load("vistas/contactos/selectCategorias.php");
});
</script>