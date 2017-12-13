<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Barra de navegación presente en toda nuestra aplicación, que incluye los enlaces al login/registro,
lista de usuarios (para administradores), perfil, lista de anuncios y registro de anuncios ***
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../assets/css/bootstrap.css"></link>
        <link rel="stylesheet" href="../assets/css/list_adv.css"></link>
        <link rel="stylesheet" href="../assets/css/login.css"></link>
    </head>
    
    <body id="#myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Lo Vendo Todo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION["user"])) {
                    ?>
                    <li><a href="views/registro_anuncio.php">Registrar Anuncio</a></li>
                    <li><a href="index.php?accion=list_adv">Lista de Anuncios</a></li>
                    <li><?php echo '<a href="index.php?accion=list_use&Nombre_Usuario=' . $_SESSION["user"] . '"><span class="glyphicon glyphicon-user"></span>'. $_SESSION["user"] .'</a>'?></li>
                    <?php 
                        if($_SESSION["user"] == "ADMIN") {
                    ?>
                        <li><a href="index.php?accion=list_use">Lista de usuarios(ADM)</a></li>
                        <?php
                        }
                        ?>
                    <li><a href="index.php?accion=logout"><span class="glyphicon glyphicon-log-out"></span>LOG OUT</a></li>
                    <?php
                        }
                        else {
                    ?>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span>LOG IN</a></li>
                    <?php
                        }
                    ?>
                    </ul>
            </div>
        </div>
        </nav>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conéctate a tu cuenta</h1><br>
				  <form action="index.php?accion=login" method=POST>
					<input type="text" name="user" placeholder="Usuario" required>
					<input type="password" name="pass" placeholder="Contraseña" required>
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					¿Aún no tienes cuenta? Haz click <a href="views/registro.php">aquí</a>
				  </div>
				</div>
			</div>
        </div>
    </body>
</html>