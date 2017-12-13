<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Vista de perfil de usuario ***
-->

<html>
    
    <head>
        <title>LoVendoTodo</title>
    </head>

    <body>
        <div class="container">
            <br><br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $rows['datos'][0]['Nombre_Usuario']?></h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <?php echo '<img alt="Imagen" src="../../assets/img/use/'. $rows['datos'][0]['NIF'] . '.jpg" class="img-circle img-responsive">' ?>
                        </div>
                        <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Nombre:</td>
                                <td><?php echo $rows['datos'][0]['Nombre'] ?></td>
                            </tr>
                            <tr>
                                <td>Primer Apellido:</td>
                                <td><?php echo $rows['datos'][0]['Apellido1'] ?></td>
                            </tr>
                            <tr>
                                <td>Segundo Apellido:</td>
                                <td><?php echo $rows['datos'][0]['Apellido2'] ?></td>
                            </tr>
                            <tr>
                                <td>Dirección:</td>
                                <td><?php echo $rows['datos'][0]['Direccion'] ?></td>
                            </tr>
                            <tr>
                                <td>Población:</td>
                                <td><?php echo $rows['datos'][0]['Poblacion'] ?></td>
                            </tr>
                            <tr>
                                <td>Código Postal:</td>
                                <td><?php echo $rows['datos'][0]['CP'] ?></td>
                            </tr>
                            <tr>
                                <td>Provincia:</td>
                                <td><?php echo $rows['datos'][0]['Provincia'] ?></td>
                            </tr>
                            <tr>
                                <td>Teléfono Fijo:</td>
                                <td><?php echo $rows['datos'][0]['Telefono_Fijo'] ?></td>
                            </tr>
                            <tr>
                                <td>Teléfono Móvil:</td>
                                <td><?php echo $rows['datos'][0]['Telefono_Movil'] ?></td>
                            </tr>
                            <tr>
                                <td>E-Mail:</td>
                                <td><?php echo $rows['datos'][0]['Correo'] ?></td>
                            </tr>
                            <tr>
                                <td>Web:</td>
                                <td><?php echo $rows['datos'][0]['Web'] ?></td>
                            </tr>
                            <tr>
                                <td>Blog:</td>
                                <td><?php echo $rows['datos'][0]['Blog'] ?></td>
                            </tr>
                            <tr>
                                <td>Twitter:</td>
                                <td><?php echo $rows['datos'][0]['Twitter'] ?></td>
                            </tr>
                            <tr>
                                <td>Fecha de registro:</td>
                                <td><?php echo $rows['datos'][0]['Fecha_Registro'] ?></td>
                            </tr>
                            </tbody>
                        </table>
                        
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>