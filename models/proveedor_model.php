<?php

require_once("class/database.php");

class Proveedor_model
{
	var $codigo;
	var $ruc;
	var $razonSocial;
	var $direccion;
	var $tipoPago;

	function __construct()
	{
		
	}

	function listar()
	{
		$bd= new BaseDatos();

		$cnx= $bd->conectar();

		$consulta=$cnx->prepare("SELECT *  FROM proveedor");

		$consulta->execute();

		$tabla=$consulta->fetchAll();

		return $tabla;
	}

	function agregar()
	{
		$bd =  new BaseDatos();
		$cnx =$bd->conectar();
		$stmt = $cnx->prepare("INSERT INTO proveedor (ruc, razon_social, direccion, tipo_pago) VALUES (:dato1,:dato2,:dato3,:dato4)");
		$stmt->bindValue(":dato1",$this->ruc);
		$stmt->bindValue(":dato2",$this->razonSocial);
		$stmt->bindValue(":dato3",$this->direccion);
		$stmt->bindValue(":dato4",$this->tipoPago);
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
		$stmt = $cnx->prepare("select * from proveedor where codigo=:dato");

		//Enviar el parametro
		$stmt->bindValue(":dato",$this->codigo);

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

		$stmt = $cnx->prepare("update proveedor set ruc=:dato1, razon_social=:dato2, direccion=:dato3, tipo_pago=:dato4 where codigo=:dato5;");

		$stmt->bindValue(":dato1",$this->ruc);
		$stmt->bindValue(":dato2",$this->razonSocial);
		$stmt->bindValue(":dato3",$this->direccion);
		$stmt->bindValue(":dato4",$this->tipoPago);
		$stmt->bindValue(":dato5",$this->codigo);

		$stmt->execute();
	}

	function eliminar()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("delete from proveedor where codigo=:dato");

		$stmt->bindValue(":dato",$this->codigo);

		$stmt->execute();
	}
	
}

?>