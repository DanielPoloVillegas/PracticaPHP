<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Vista de lista de usuarios, exclusiva para administradores. Se pueden eliminar usuarios desde ella o
	visitar los perfiles de los usuarios haciendo click sobre sus fotos ***
-->

<!DOCTYPE html>
<html>
	<head>
		<title>LoVendoTodo</title>
		<script src="https://use.fontawesome.com/1e803d693b.js"></script>
		<link rel="stylesheet" href="../assets/css/list_use.css"></link>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="panel panel-default user_panel">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de usuarios</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<table class="table-users table" border="0">
								<tbody>
								<?php
									foreach ($rows["datos"] as $fila) {
								?>
									<tr>
										<td width="10" align="center">
											<?php echo '<a href="index.php?accion=list_use&Nombre_Usuario=' . $fila["Nombre_Usuario"] . '"><img class="pull-left img-circle nav-user-photo" width="50" src="../../assets/img/use/' . $fila["NIF"] . '.jpg"/></a>' ?>
										</td>
										<td>
											<?php echo $fila["Nombre"] . " " . $fila["Apellido1"] . " " . $fila["Apellido2"]?>
										</td>
										<td>
											<?php echo $fila["Nombre_Usuario"] ?>
										</td>
										<td align="center">
											Registrado:  <?php echo $fila["Fecha_Registro"]?>
										</td>
										<td>
											<?php
											if ($_SESSION["user"] == "ADMIN"){
                                                echo '<a href="index.php?accion=user_del&Nombre_Usuario='.$fila["Nombre_Usuario"].'"><input type="button" value="Borrar Usuario"/></a>';
                                            }?>
										</td>
									</tr>
								<?php
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>