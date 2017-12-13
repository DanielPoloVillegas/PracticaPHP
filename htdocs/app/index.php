<!--
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***
*** USUARIOS : PASSWORD ***
*** ADMIN : Administrador1 ***
*** User1, User2, User3 : Chichita1 ***
-->

<?php
session_start();
if (!isset($_SESSION["user"])) {
	session_destroy();
}
include_once 'views/header.php';
include_once 'controllers/controlador.php';
include_once 'models/modelo.php';
//Definimos un objeto controlador
$controlador = new controlador();
if ($_GET && $_GET["accion"]){
	//Sanitizamos los datos que recibamos mediante el GET
	$accion = filter_input(INPUT_GET, "accion", FILTER_SANITIZE_STRING);
	//Verificamos que el objeto controlador que hemos creado implementa el
	//método que le hemos pasado mediante GET
	$controlador -> accion($accion);
}
else {
	$controlador -> accion('list_adv'); //redirección en caso de acción desconocida
}
include_once 'views/footer.php'
?> 