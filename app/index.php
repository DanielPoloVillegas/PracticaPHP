<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<?php
//include_once 'header'
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
//include_once 'footer'
?> 