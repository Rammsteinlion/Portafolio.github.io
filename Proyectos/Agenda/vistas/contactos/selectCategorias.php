<?php 

require_once "../../clases/Conexion.php";
$con = new Conexion();
$conexion = $con->conectar();

$sql ="SELECT id_categoria,nombre FROM t_categorias ORDER BY nombre";
$result = mysqli_query($conexion,$sql);
?>

<label for="idCategoriaSelect">Selecciona una Categoria</label>
<select name="idCategoriaSelect" id="idCategoriaSelect" class="form-control">
<?php while($ver = mysqli_fetch_row($result)): ?>
<!---arreglo asociativo---> 
<option value="<?=$ver[0]?>"><?=$ver[1]?></option>
<?php endwhile; ?>
</select>
