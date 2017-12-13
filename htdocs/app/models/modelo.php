<?php
/** Clase 'modelo' que implementa el modelo de nuestra aplicaci�n en una arquitectura MVC.
* se encarga de gestionar el acceso a la base de datosen una capa especializada */
class modelo {
	private $conexion; //Atributo que contendr� la referencia a la base de datos
	// Par�metros de conexi�n a la base de datos
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "practica_php";
	
	/** Constructor de la clase que ejecutar� directamente el m�todo 'conectar()' */
	public function __construct() {
		$this->conectar();
	}

/**
* M�todo que realiza la conexi�n a la base de datos de usuarios mediante PDO. Devuelve un
* valor TRUE si la conexi�n se realiz� correctamente o el mensaje generado por la excepci�n si
* se produjo alg�n error
*/
	public function conectar() {
		try {
			$this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db",
			$this->user, $this->pass);
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$return = TRUE;
		} 
		catch(PDOException $ex) {
			$return = $ex->getMessage();
		}
		return $return;
	}
	
	public function datos_anuncios($ID) {
		$return = [ "correcto" => FALSE,
					"datos" => NULL,
					"error" => NULL
		];
		if ($ID == "all")
			try { 
				$sql = "SELECT * FROM anuncios ORDER BY fecha_reg DESC";
				$resultsquery = $this->conexion->query($sql);
				if ($resultsquery){
					$return["correcto"] = TRUE;
					$return["datos"] = $resultsquery->fetchAll(PDO::FETCH_ASSOC);
				}
			} 
			catch(PDOException $ex) {
				$return["error"] = $ex->getMessage();
			}
		else {
			try { 
				$sql = "SELECT * FROM anuncios WHERE ID=$ID";
				$resultsquery = $this->conexion->query($sql);
				if ($resultsquery){
					$return["correcto"] = TRUE;
					$return["datos"] = $resultsquery->fetchAll(PDO::FETCH_ASSOC);
				}
			} 
			catch(PDOException $ex) {
				$return["error"] = $ex->getMessage();
			}
		}
		return $return;
	}

	public function datos_usuarios($Usuario) {
		$return = [ "correcto" => FALSE,
					"datos" => NULL,
					"error" => NULL
		];
		if ($Usuario == "all")
			try { 
				$sql = "SELECT * FROM usuarios ORDER BY Nombre_Usuario";
				$resultsquery = $this->conexion->query($sql);
				if ($resultsquery){
					$return["correcto"] = TRUE;
					$return["datos"] = $resultsquery->fetchAll(PDO::FETCH_ASSOC);
				}
			} 
			catch(PDOException $ex) {
				$return["error"] = $ex->getMessage();
			}
		else {
			try { 
				$sql = "SELECT * FROM usuarios WHERE Nombre_Usuario='$Usuario'";
				$resultsquery = $this->conexion->query($sql);
				if ($resultsquery){
					$return["correcto"] = TRUE;
					$return["datos"] = $resultsquery->fetchAll(PDO::FETCH_ASSOC);
				}
			} 
			catch(PDOException $ex) {
				$return["error"] = $ex->getMessage();
			}
		}
		return $return;
	}

	public function add_user($datos) {
		try{
			$sql = "INSERT INTO usuarios VALUES ('".$datos["NIF"]."', '".$datos["Nombre"]."', '".$datos["Apellido1"]."', 
			'".$datos["Apellido2"]."', '".md5($datos["Password"])."', '".$datos["Nombre_Usuario"]."', 
			'".$datos["Direccion"]."', '".$datos["Poblacion"]."', '".$datos["CP"]."', '".$datos["Provincia"]."', 
			'".$datos["Telefono_Fijo"]."', '".$datos["Telefono_Movil"]."', '".$datos["Correo"]."', '".$datos["Web"]."', 
			'".$datos["Blog"]."', '".$datos["Twitter"]."', '". date("Y-m-d")."')";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}

	public function add_adv($datos) {
		$datos["Precio_Venta"] = $datos["Precio_Prod"] + $datos['Precio_Prod'] * $datos['Porcentaje'] / 100;
		try{
			$sql = "INSERT INTO anuncios VALUES (NULL, '".$datos["Titulo"]."', '".$datos["Precio_Prod"]."', 
			'".$datos["Precio_Venta"]."', '".$datos["Tipo"]."', '".$datos["Porcentaje"]."', 
			'".$datos["Categoria"]."', '".$datos["Caracteristicas"]."', '".date("Y-m-d")."', '".$datos["Usuario"]."')";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}
	
	public function mod_user($datos) {
		try{
			$sql = "UPDATE usuarios SET Nombre = '".$datos["Nombre"]."', Apellido1 = '".$datos["Apellido1"]."', 
			Apellido2 = '".$datos["Apellido2"]."', Direccion = '".$datos["Direccion"]."', Poblacion = '".$datos["Poblacion"]."', 
			CP = '".$datos["CP"]."', Provincia = '".$datos["Provincia"]."', Telefono_Fijo = '".$datos["Telefono_Fijo"]."', 
			Telefono_Movil = '".$datos["Telefono_Movil"]."', Correo = '".$datos["Correo"]."', Web = '".$datos["Web"]."', 
			Blog = '".$datos["Blog"]."', Twitter = '".$datos["Twitter"]."' WHERE Nombre_Usuario = '".$datos["Nombre_Usuario"]."'";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}

	public function mod_adv($datos) {
		$datos["Precio_Venta"] = $datos["Precio_Prod"] + $datos['Precio_Prod'] * $datos['Porcentaje'] / 100;
		$datos["Usuario"] = "default";
		try{
			$sql = "UPDATE anuncios SET Titulo = '".$datos["Titulo"]."', Precio_Prod = '".$datos["Precio_Prod"]."', 
			Precio_Venta = '".$datos["Precio_Venta"]."', Tipo = '".$datos["Tipo"]."', Porcentaje = '".$datos["Porcentaje"]."', 
			Categoria = '".$datos["Categoria"]."', Caracteristicas = '".$datos["Caracteristicas"]."', Usuario = '".$datos["Usuario"]."'
			WHERE ID = 1";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}

	public function del_user($Usuario) {
		try{
			$sql = "DELETE FROM usuarios WHERE Nombre_Usuario = '$Usuario'";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}

	public function del_adv($ID) {
		try{
			$sql = "DELETE FROM anuncios WHERE ID = '$ID'";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}

	public function acceso_log() {
		if ($_SESSION["user"] == "ADMIN") {
			$perfil = 1;
		}
		else $perfil = 0;
		try{
			$sql = "INSERT INTO log VALUES (NULL, '".$_SESSION["user"]."', '".$perfil."', 
			'".date("Y-m-d H:i:s")."', 'ACCESO')";
			$resultsquery = $this->conexion->query($sql);
			if ($resultsquery){
				$return["correcto"] = TRUE;
				$return["datos"] = "OK";
			}
		} 
		catch(PDOException $ex) {
			$return["error"] = $ex->getMessage();
		}
	return $return;
	}

}
?>