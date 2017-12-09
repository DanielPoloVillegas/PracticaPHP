<!DOCTYPE html>
<table class="table-striped">
	<tr>
		<td>Producto</td>
		<td>Categoría</td>
		<td>Precio</td>
		<td>Fecha</td>
		<td>Imagen</td>
		<td>Operaciones</td>
	</tr>
<?php
foreach ($rows["datos"] as $fila) {
?>
	<tr>
		<td><?php echo '<a href="index.php?accion=listado&ID=' . $fila["ID"] . '">' . $fila["Titulo"] . '</a>'?></td>
		<td><?php echo $fila["Categoria"]?></td>
		<td><?php echo $fila["Precio_Venta"]?></td>
		<td><?php echo $fila["Fecha_Reg"]?></td>
		<td><?php echo '<img width="100" height="100" src="../../assets/img/adv/' . $fila["Imagen"] . '"/>'?></td>
		<td><?php?></td>
	</tr>
<?php
}
?>

</table>