<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Formulario de registro de anuncios. Posee un control de datos básico, con requerimiento de campos. ***
-->

<head> 
    <title>LoVendoTodo</title>
    <link rel="stylesheet" href="../assets/css/registro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <?php session_start();?>
	    <div class="container">
            <form class="form-horizontal" role="form" id="registro_anuncio" action="../index.php?accion=adv_new" method=POST enctype="multipart/form-data">
                <h2>Registro de anuncio</h2>
                <div class="form-group">
                    <label for="Titulo" class="col-sm-3 control-label">Título</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Titulo" maxlength="40" placeholder="Titulo" size="20" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Precio_Prod" class="col-sm-3 control-label">Precio mínimo del producto</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Precio_Prod" maxlength="10" placeholder="Precio mínimo" size="10" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Porcentaje" class="col-sm-3 control-label">Porcentaje de ganancia</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Porcentaje" maxlength="10" placeholder="Porcentaje" size="10" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Tipo" class="col-sm-3 control-label">Tipo</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="Tipo" form="registro_anuncio" placeholder="Tipo" required>
                            <option value="Nuevo">Nuevo</option>
                            <option value="Usado">Usado</option>
                            <option value="Defectuoso">Defectuoso</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Categoria" class="col-sm-3 control-label">Categoría</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="Categoria" form="registro_anuncio" placeholder="Categoría" required>
                            <option value="Motor">Motor</option>
                            <option value="Informatica">Informática</option>
                            <option value="Telefonia">Telefonía</option>
                            <option value="Hogar">Hogar</option>
                            <option value="Inmobiliaria">Inmobiliaria</option>
                            <option value="Moda">Moda</option>
                            <option value="Juegos">Juegos</option>
                            <option value="Deporte">Deporte</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Caracteristicas" class="col-sm-3 control-label">Características</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="Caracteristicas" rows="4" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Imagen" class="col-sm-3 control-label">Imagen</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="file" name="Imagen" accept=".jpg" max-size=32154 required/>
                    </div>
                </div>
                <?php echo '<input class="form-control" type="hidden" name="Usuario" value="'.$_SESSION["user"].'"/>'?>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </div>
                </div>
            </form>
        </div> 
	</body>
</html>