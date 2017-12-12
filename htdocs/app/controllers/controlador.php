<?php
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
				var_dump($return);
				break;
			case 'user_mod':
				$return = $this -> modelo -> mod_user($_POST);
				var_dump($return);
				break;
			case 'user_del':
				$return = $this -> modelo -> del_user($_POST["Nombre_Usuario"]);
				break;
			case 'adv_new':
				$return = $this -> modelo -> add_adv($_POST);
				var_dump($return);
				break;
			case 'adv_mod':
				$return = $this -> modelo -> mod_adv($_POST);
				var_dump($return);
				break;
			case 'adv_del':
				$return = $this -> modelo -> del_adv($_POST["ID"]);
				break;
			default:
				$rows = $this -> modelo -> datos_anuncios("all");
				include 'views/list_adv.php';
				break;
		}
	}
	
}
?>