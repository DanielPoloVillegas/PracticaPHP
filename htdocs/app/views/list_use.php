<!DOCTYPE html>
<table class="table-striped">
	<tr>
		<td>NIF</td>
		<td>Nombre</td>
		<td>Apellido 1</td>
		<td>Apellido 2</td>
		<td>Usuario</td>
		<td>Foto</td>
	</tr>
<?php
foreach ($rows["datos"] as $fila) {
?>
	<tr>
		<td><?php echo $fila["NIF"]?></td>
		<td><?php echo $fila["Nombre"]?></td>
		<td><?php echo $fila["Apellido1"]?></td>
		<td><?php echo $fila["Apellido2"]?></td>
        <td><?php echo '<a href="index.php?accion=list_use&Nombre_Usuario=' . $fila["Nombre_Usuario"] . '">' . $fila["Nombre_Usuario"] . '</a>'?></td>
		<td><?php echo '<img width="100" height="100" src="../../assets/img/use/' . $fila["NIF"] . '.jpg"/>'?></td>
	</tr>
<?php
}
?>

</table>