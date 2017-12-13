<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***

*** Formulario de registro de usuarios. Posee un control de datos básico, con campos requeridos
    y expresiones regulares ***
-->

<!DOCTYPE html>
    <head> 
        <title>LoVendoTodo</title>
        <link rel="stylesheet" href="../assets/css/registro.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
	    <div class="container">
            <form class="form-horizontal" role="form" id="registro" action="../index.php?accion=user_new" method=POST enctype="multipart/form-data">
                <h2>Formulario de Registro</h2>
                <div class="form-group">
                    <label for="NIF" class="col-sm-3 control-label">NIF</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="NIF" maxlength="9" size="9" placeholder="NIF" pattern="[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Nombre" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Nombre" maxlength="30" size="15" placeholder="Nombre" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Apellido1" class="col-sm-3 control-label">Primer Apellido</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Apellido1" maxlength="60" size="30" placeholder="Primer Apellido" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Apellido2" class="col-sm-3 control-label">Segundo Apellido</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Apellido2" maxlength="60" size="30" placeholder="Segundo Apellido" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Nombre_Usuario" class="col-sm-3 control-label">Usuario</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Nombre_Usuario" maxlength="20" size="30" placeholder="Usuario" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-sm-3 control-label">Contraseña</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="password" name="Password" minlegth="8" maxlength="16" placeholder="Contraseña" size="16" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}" required/>            
                    </div>
                </div>
                <div class="form-group">
                    <label for="Direccion" class="col-sm-3 control-label">Dirección</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Direccion" maxlength="60" size="30" placeholder="Dirección" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Provincia" class="col-sm-3 control-label">Provincia</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="Provincia" form="registro" placeholder="Provincia" required>
                            <option value="01">Álava</option>
                            <option value="02">Albacete</option>
                            <option value="03">Alicante</option>
                            <option value="04">Almería</option>
                            <option value="05">Ávila</option>
                            <option value="06">Badajoz</option>
                            <option value="07">Islas Baleares</option>
                            <option value="08">Barcelona</option>
                            <option value="09">Burgos</option>
                            <option value="10">Cáceres</option>
                            <option value="11">Cádiz</option>
                            <option value="12">Castellón</option>
                            <option value="13">Ciudad Real</option>
                            <option value="14">Córdoba</option>
                            <option value="15">Coruña</option>
                            <option value="16">Cuenca</option>
                            <option value="17">Girona</option>
                            <option value="18">Granada</option>
                            <option value="19">Guadalajara</option>
                            <option value="20">Gipuzkoa</option>
                            <option value="21">Huelva</option>
                            <option value="22">Huesca</option>
                            <option value="23">Jaén</option>
                            <option value="24">León</option>
                            <option value="25">Lleida</option>
                            <option value="26">La Rioja</option>
                            <option value="27">Lugo</option>
                            <option value="28">Madrid</option>
                            <option value="29">Málaga</option>
                            <option value="30">Murcia</option>
                            <option value="31">Navarra</option>
                            <option value="32">Ourense</option>
                            <option value="33">Asturias</option>
                            <option value="34">Palencia</option>
                            <option value="35">Las Palmas</option>
                            <option value="36">Pontevedra</option>
                            <option value="37">Salamanca</option>
                            <option value="38">S.C. Tenerife</option>
                            <option value="39">Cantabria</option>
                            <option value="40">Segovia</option>
                            <option value="41">Sevilla</option>
                            <option value="42">Soria</option>
                            <option value="43">Tarragona</option>
                            <option value="44">Teruel</option>
                            <option value="45">Toledo</option>
                            <option value="46">Valencia</option>
                            <option value="47">Valladolid</option>
                            <option value="48">Bizkaia</option>
                            <option value="49">Zamora</option>
                            <option value="50">Zaragoza</option>
                            <option value="51">Ceuta</option>
                            <option value="52">Melilla</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Poblacion" class="col-sm-3 control-label">Población</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Poblacion" maxlength="20" size="20" placeholder="Población" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="CP" class="col-sm-3 control-label">Código Postal</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="CP" minlegth="5" maxlength="5" size="5" placeholder="Código Postal" pattern="[1-5][0-9]{4}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Telefono_Fijo" class="col-sm-3 control-label">Teléfono Fijo</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Telefono_Fijo" minlength="9" maxlength="9" size="9" placeholder="Teléfono Fijo" pattern="[89]{1}[0-9]{8}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Telefono_Movil" class="col-sm-3 control-label">Teléfono Móvil</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Telefono_Movil" minlength="9" maxlength="9" size="9" placeholder="Teléfono Móvil" pattern="[67]{1}[0-9]{8}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Correo" class="col-sm-3 control-label">E-Mail</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Correo" maxlength="60" size="30" pattern="\w+@\w+(\.\w+)?" placeholder="E-Mail" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Web" class="col-sm-3 control-label">Web</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Web" maxlength="100" size="60" placeholder="Web" pattern="^((http:\/\/|https:\/\/)?(www\.)?)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Blog" class="col-sm-3 control-label">Blog</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Blog" maxlength="60" size="50" placeholder="Blog"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Twitter" class="col-sm-3 control-label">Twitter</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="Twitter" maxlength="40" placeholder="Twitter" pattern="^(https?:\/\/)?((w{3}\.)?)?twitter\.com\/((#!\/)?[a-z0-9_ ]+)?$" size="30"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Foto" class="col-sm-3 control-label">Foto</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="file" name="Foto" accept=".jpg" max-size=32154 required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </div>
                </div>
            </form>
        </div> 
	</body>
</html>