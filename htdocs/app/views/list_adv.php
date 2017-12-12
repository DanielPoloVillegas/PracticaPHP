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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Lo Vendo Todo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php
            if(isset($_SESSION)) {
        ?>
        <li><a href="views/registro_anuncio.php">Registrar Anuncio</a></li>
        <li><a href="index.php?accion=list_adv">Lista de Anuncios</a></li>
        <li><?php echo '<a href="index.php?accion=list_use&Nombre_Usuario=' . $_SESSION["Nombre_Usuario"] . '">Perfil</a>'?></li>
        <?php 
            if($_SESSION["Nombre_Usuario"] == "ADMIN") {
        ?>
            <li><a href="index.php?accion=list_use">Lista de usuarios(ADM)</a></li>
            <?php
            }
            ?>
        <li><a href="index.php?logout"><span class="glyphicon glyphicon-log-out"></span>LOG OUT</a></li>
        <?php
            }
        ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>LOG IN</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
    if (isset($_SESSION)) {
?>  
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
<?php
    }
?>
<div class="container-fluid bg-grey">
    <div class="row">
        <div class="container">
            <div id="products" class="row list-group">
                <?php foreach ($rows["datos"] as $fila) {?>
                    <div class="item col-xs-4 col-lg-4">
                        <div class="thumbnail">
                            <?php echo '<img src="../../assets/img/adv/' . $fila["ID"] . '.jpg"/>'?>
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
                                        <!--TODO rest of icons-->
                                        <input type="image" src="../../assets/img/icons/del_adv.png" name="foo" id="button" value="bar">
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


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Daniel Polo Villegas &copy; 2017</p>
</footer>


</body>
</html>