<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Vista de lista de anuncios, cada anuncio puede ser borrado por su autor o por el administrador.
    Se puede acceder a la página de cada anuncio haciendo click sobre "Más detalles" ***
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LoVendoTodo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css"></link>
  <link rel="stylesheet" href="../assets/css/list_adv.css"></link>
</head>
<body>

<!--Posible función de busqueda futura-->
<?php
    //if (isset($_SESSION["user"])) {
?>
<!-- TODO Busqueda
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>We specialize in blablabla</p> 
  <form>  
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>
    -->
<?php
    //}
?>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="container">
            <div id="products" class="row list-group">
                <?php foreach ($rows["datos"] as $fila) {?>
                    <div class="item col-xs-4 col-lg-4">
                        <div class="thumbnail">
                            <?php echo '<img class="foto" src="../../assets/img/adv/' . $fila["ID"] . '.jpg"/>'?>
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading"><?php echo $fila["Titulo"]?></h4>
                                <p class="group inner list-group-item-text">
                                    <?php echo $fila["Caracteristicas"]?>
                                </p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead"><?php echo $fila["Precio_Venta"] . "€"?></p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <?php echo '<a class="btn btn-success" href="index.php?accion=list_adv&ID='. $fila["ID"] . '">Más detalles</a>' ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <?php if(isset($_SESSION["user"])) {
                                            if ($_SESSION["user"] == "ADMIN" || $_SESSION["user"] == $fila["Usuario"]) {
                                                echo '<a href="index.php?accion=adv_del&ID='.$fila["ID"].'"><input type="button" value="Borrar Anuncio"/></a>';
                                            }
                                        }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>