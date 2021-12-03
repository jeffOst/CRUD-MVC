<?php

class BaseDatos
{
	//Propiedades
	var $servidor;
	var $basedatos;
	var $usuario;
	var $clave;
	var $charset;

	//Metodos	
	function __construct()
	{
		//Asignar las constantes a las propiedades
		$this->servidor = constant("SERVIDOR");
		$this->basedatos = constant("BASEDATOS");
		$this->usuario = constant("USUARIO");
		$this->clave = constant("CLAVE");
		$this->charset = constant("CHARSET");
	}

	function conectar() // ---> Devulve un objeto de Conexion PDO
	{
		//Controlador de ERRORES por EXCEPCION
		try{

			//Codigo de conexion
			$cadena = "mysql:host=".$this->servidor."; dbname=" . $this->basedatos . "; charset=" . $this->charset;

			$usuario = $this->usuario;

			$clave = $this->clave;

			//opcionalmente
			$opciones = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES=>false];

			//Instanciando
			$cnx = new PDO($cadena,$usuario,$clave,$opciones);

			//Returnar la conexion
			return $cnx;

		}
		catch(PDOException $e)
		{

			//Codigo SI existe algun ERROR durante la conexion
			print_r("Error de Conexion:" . $e->getMessage());

		}

	}
}

?>