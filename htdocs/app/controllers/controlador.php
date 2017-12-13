<?php
/*
*** Autor: Daniel Polo Villegas ***
*** Versión del programa: 1.0 ***
*** Fecha de creación: 08/12/2017 ***
*/
class controlador {
	// El el atributo $modelo es de la 'clase modelo' y ser� a trav�s del que podremos
	// acceder a los datos y las operaciones de la base de datos desde el controlador
	private $modelo;
	//$mensajes se utiliza para almacenar los mensajes generados en las tareas,
	//que ser�n posteriormente transmitidos a la vista para su visualizaci�n
	private $mensajes;
	/**
	* Constructor que crea autom�ticamente un objeto modelo en el controlador e
	* inicializa los mensajes a vac�o
	*/
	public function __construct() {
		$this -> modelo = new modelo();
		$this -> mensajes = [];
	}

	/**
	* Función principal que gestiona las distinas acciones del programa realizando las llamadas necesarias
	* al modelo y pasando los resultados de las consultas de éste a las vistas correspondientes
	*/
	public function accion($accion) {
		switch ($accion) {
			case 'list_adv':
				if (isset ($_GET["ID"])) {
					$rows = $this -> modelo -> datos_anuncios($_GET["ID"]);
					include 'views/adv.php';
				}
				else {
					$rows = $this -> modelo -> datos_anuncios("all");
					include 'views/list_adv.php';
				}
				break;
			case 'list_use':
				if (isset ($_GET["Nombre_Usuario"])) {
					$rows = $this -> modelo -> datos_usuarios($_GET["Nombre_Usuario"]);
					include 'views/use.php';
				}
				else {
					$rows = $this -> modelo -> datos_usuarios("all");
					include 'views/list_use.php';
				}
				break;
			case 'user_new':
				$return = $this -> modelo -> add_user($_POST);
				session_start();
				$_SESSION["user"] = $_POST["Nombre_Usuario"];
				// TODO CARGA DE FOTOS
				// move_uploaded_file($_FILES["Foto"]["tmp_name"], "../../assets/img/use" . $_POST["NIF"] .".jpg");
				header("Location: index.php");
				break;
			case 'user_mod':
				$return = $this -> modelo -> mod_user($_POST);
				break;
			case 'user_del':
				$return = $this -> modelo -> del_user($_GET["Nombre_Usuario"]);
				header("Location: index.php");
				break;
			case 'adv_new':
				$return = $this -> modelo -> add_adv($_POST);
				// TODO CARGA DE FOTOS
				header("Location: index.php");
				break;
			case 'adv_mod':
				$return = $this -> modelo -> mod_adv($_POST);
				break;
			case 'adv_del':
				$return = $this -> modelo -> del_adv($_GET["ID"]);
				header("Location: index.php");
				break;
			case 'login':
				$return = $this -> modelo -> datos_usuarios($_POST['user']);
				if($_POST['user'] == $return["datos"][0]['Nombre_Usuario'] && md5($_POST['pass']) == $return["datos"][0]['Password']){
				session_start();
				$_SESSION["user"] = $_POST['user'];
				$return = $this -> modelo -> acceso_log();
				}	
				header("Location: index.php");
				break;
			case 'logout':
				unset($_SESSION["user"]);
				header("Location: index.php");
				break;
			default:
				$rows = $this -> modelo -> datos_anuncios("all");
				include 'views/list_adv.php';
				break;
		}
	}
	
}
?>