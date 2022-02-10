<?php 
require_once "../../clases/Conexion.php";
$objconexion = new conexion();
$conexion = $objconexion->conectar();

$sql = "SELECT id_categoria,nombre,descripcion FROM t_categoria";
$result = mysqli_query($conexion,$sql);

?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="tablaCategoriasDT">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                 while($mostrar = mysqli_fetch_array($result)):
                 $idCategoria = $mostrar['id_categoria'];
                  ?>
                   
                    <tr>
                        <td><?= $mostrar['id_categoria'] ?></td>
                        <td><?= $mostrar['nombre'] ?></td>
                        <td><?= $mostrar['descripcion'] ?></td>

                        <td>
                        <span onclick="obtenerDatosCategoria('<?= $idCategoria?>')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#modalActualizarCategoria">
                            <span class="fas fa-edit"></span>    
                            
                        </span>                      
                        </td>

                        <td>
                        <span class="btn btn-danger  btn-sm" onclick="eliminarCategoria(
                            '<?= $idCategoria ?>')">
                            <span class="fas fa-trash-alt"></span>                                  
                        </span>                      
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--datatables--->
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaCategoriasDT').DataTable();
    });
</script>