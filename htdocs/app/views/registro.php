<form id="registro" action="../index.php?accion=user_new" method="POST" enctype="multipart/form-data">
    <h3>NIF: </h3><input type="text" name="NIF" maxlength="9" size="9" pattern="[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}" required/>
    <h3>Nombre: </h3><input type="text" name="Nombre" maxlength="30" size="15" required/>
    <h3>Primer apellido: </h3><input type="text" name="Apellido1" maxlength="60" size="30" required/>
    <h3>Segundo apellido: </h3><input type="text" name="Apellido2" maxlength="60" size="30" required/>
    <h3>Contraseña: </h3><input type="password" name="Password" minlegth="8" maxlength="16" size="16" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}" required/>
    <h3>Usuario: </h3><input type="text" name="Nombre_Usuario" maxlength="20" size="30" required/>
    <h3>Dirección: </h3><input type="text" name="Direccion" maxlength="60" size="30" required/>
    <h3>Provincia: </h3><select name="Provincia" form="registro" required>
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
    <h3>Población: </h3><input type="text" name="Poblacion" maxlength="20" size="20" required/>
    <h3>Código Postal: </h3><input type="text" name="CP" minlegth="5" maxlength="5" size="5" pattern="[1-5][0-9]{4}" required/>
    <h3>Teléfono Fijo: </h3><input type="text" name="Telefono_Fijo" minlength="9" maxlength="9" size="9" pattern="[89]{1}[0-9]{8}" required/>
    <h3>Teléfono Móvil: </h3><input type="text" name="Telefono_Movil" minlength="9" maxlength="9" size="9" pattern="[67]{1}[0-9]{8}" required/>
    <h3>Correo: </h3><input type="text" name="Correo" maxlength="60" size="30" pattern="\w+@\w(\.\w+)?" required/>
    <h3>Web: </h3><input type="text" name="Web" maxlength="100" size="60" pattern="^((http:\/\/|https:\/\/)?(www\.)?)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" required/>
    <h3>Blog: </h3><input type="text" name="Blog" maxlength="60" size="50"/>
    <h3>Twitter: </h3><input type="text" name="Twitter" maxlength="40" pattern="^(https?:\/\/)?((w{3}\.)?)twitter\.com\/((#!\/)?[a-z0-9_ ]+)?$" size="30"/>
    <h3>Foto: </h3><input type="file" name="Foto" accept=".jpg" max-size=32154 required/>
    <br>
    <input type="submit" value="Enviar" name="Enviar" class="btn btn-success"/>
</form>