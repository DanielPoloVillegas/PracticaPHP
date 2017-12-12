<form id="registro_anuncio" action="../index.php?accion=adv_new" method="POST" enctype="multipart/form-data">
    <h3>Titulo: </h3><input type="text" name="Titulo" maxlength="40" size="20" required/>
    <h3>Precio mínimo del producto: </h3><input type="text" name="Precio_Prod" maxlength="10" size="10" required/>
    <h3>Porcentaje de ganacia: </h3><input type="text" name="Porcentaje" maxlength="10" size="10" required/>
    <h3>Tipo: </h3><select name="Tipo" form="registro_anuncio" required>
        <option value="Nuevo">Nuevo</option>
        <option value="Usado">Usado</option>
        <option value="Defectuoso">Defectuoso</option>
    </select>
    <h3>Categoría: </h3><select name="Categoria" form="registro_anuncio" required>
        <option value="Motor">Motor</option>
        <option value="Informatica">Informática</option>
        <option value="Telefonia">Telefonía</option>
        <option value="Hogar">Hogar</option>
        <option value="Inmobiliaria">Inmobiliaria</option>
        <option value="Moda">Moda</option>
        <option value="Juegos">Juegos</option>
        <option value="Deporte">Deporte</option>
    </select>
    <h3>Características: </h3><textarea name="Caracteristicas" rows="4" required></textarea>
    <h3>Imagen: </h3><input type="file" name="Imagen" accept=".jpg" max-size=32154 required/>
    <!--input type="hidden" name="Usuario"/-->
    <br>
    <input type="submit" value="Enviar" name="Enviar" class="btn btn-success"/>
</form>