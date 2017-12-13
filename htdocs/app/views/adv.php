<!DOCTYPE html>
<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Vista completa de un anuncio ***
-->
<html lang="en">
  <head>
    <title>LoVendoTodo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="../assets/css/adv.css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
                        <?php echo '<img width="400" height="400" src="../../assets/img/adv/' . $rows['datos'][0]['ID'] . '.jpg"/>' ?>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $rows['datos'][0]['Titulo'] ?></h3>
						<p class="product-description"><strong>Características del producto: </strong><br><?php echo $rows['datos'][0]['Caracteristicas']?></p>
						<h4 class="price">Precio: <span><?php echo $rows['datos'][0]['Precio_Venta'] ?>€</span></h4>
                        <p class="state"><strong>Estado del producto: </strong><?php echo $rows['datos'][0]['Tipo']?></p>
                        <p class="category"><strong>Categoría: </strong><?php echo $rows['datos'][0]['Categoria'] ?></p>
                        <p class="date"><strong>Fecha de registro: </strong><?php echo $rows['datos'][0]['Fecha_Reg'] ?></p>
                        <p class="user"><strong>Publicado por: </strong><?php echo '<a href="index.php?accion=list_use&Nombre_Usuario='.$rows['datos'][0]['Usuario'].'">'.$rows['datos'][0]['Usuario'].'</a>'?></p>
                        <div class="action">
                            <!--TODO iconos modificación/borrado anuncio-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>