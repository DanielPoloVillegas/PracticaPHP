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

}?>