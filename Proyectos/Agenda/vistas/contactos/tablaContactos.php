<?php 
require_once "../../clases/Conexion.php";
$objconexion = new Conexion();
$conexion = $objconexion->conectar();

$sql ="SELECT 
c.idt_contacto AS idContacto,
 c.nombre AS nombre,
 c.primer_apellido AS papellido,
 c.segundo_apellido AS sapellido,
 c.email AS email,
 c.telefono AS telefono,
 categorias.nombre AS categoria
 FROM t_contacto AS  c
INNER JOIN t_categoria AS categorias
ON c.id_categoria = categorias.id_categoria
ORDER BY idContacto";

$result = mysqli_query($conexion,$sql);
?>

<div class="card">
    <div class="card-body">
        <div class="table-resposive">
            <table class="table table-hover table-condensed" id="tablaContactosDT">
            <thead>
                <tr>
                <th>ID</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Categoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($mostrar = mysqli_fetch_array($result)):
                    $idContacto = $mostrar['idContacto'];
            ?>
                <tr>
                    <td><?=$mostrar['idContacto']?></td>
                    <td><?=$mostrar['nombre']?></td>
                    <td><?=$mostrar['papellido']?></td>
                    <td><?=$mostrar['sapellido']?></td>
                    <td><?=$mostrar['telefono']?></td>
                    <td><?=$mostrar['email']?></td>
                    <td><?=$mostrar['categoria']?></td>

                    <td>
                        <span class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#ActualizaContacto">
                            <span class="fas fa-trash-alt"></span>
                            
                        </span>
                    </td>

                    <td>
                        <span class="btn btn-danger btn-sm" onclick="eliminarContacto()">
                            <span class="fas fa-edit"></span>
                            
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
        $('#tablaContactosDT').DataTable();
    });
</script>