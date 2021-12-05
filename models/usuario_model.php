<?php

require_once("class/database.php");

class Usuario_model
{
	var $id;
	var $nombre;
	var $correo;
	var $tipo;

	function __construct()
	{
		
	}

	function listar()
	{
		$bd= new BaseDatos();

		$cnx= $bd->conectar();

		$consulta=$cnx->prepare("SELECT *  FROM usuario");

		$consulta->execute();

		$data=$consulta->fetchAll(PDO::FETCH_OBJ);

		return $data;
	}

	function agregar()
	{
		$bd =  new BaseDatos();
		$cnx =$bd->conectar();
		$stmt = $cnx->prepare("INSERT INTO usuario (nombre, correo, tipo) VALUES (:dato1,:dato2,:dato3)");
		$stmt->bindValue(":dato1",$this->nombre);
		$stmt->bindValue(":dato2",$this->correo);
		$stmt->bindValue(":dato3",$this->tipo);
		$stmt->execute();
	}

	
	function buscarById() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from usuario where id=:dato");

		//Enviar el parametro
		$stmt->bindValue(":dato",$this->id);

		//Ejecutar la sentencia
		$stmt->execute();

		//Recuperar las filas
		$fila = $stmt->fetch();

		//Devolver la TABLA
		return $fila;

	}

	function actualizar()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("update usuario set nombre=:dato1, correo=:dato2, tipo=:dato3 where id=:dato4;");

		$stmt->bindValue(":dato1",$this->nombre);
		$stmt->bindValue(":dato2",$this->correo);
		$stmt->bindValue(":dato3",$this->tipo);
		$stmt->bindValue(":dato4",$this->id);

		$stmt->execute();
	}

	function eliminar()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("delete from usuario where id=:dato");

		$stmt->bindValue(":dato",$this->id);

		$stmt->execute();
	}
	
}

?>