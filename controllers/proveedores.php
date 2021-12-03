<?php

class Proveedores extends Controlador
{
	
	function __construct()
	{
        parent::__construct();
	}

	public function renderizar($vista = "proveedores")
	{
		$this->mostrarDatos();
		require_once ("views/".$vista.".php");

        //$this->mostrarVista($vista);
	}


	function mostrarDatos()
	{
		//Cargar el Modelo
		$modelo = $this->cargarModelo("proveedor_model");
		//Ejecutar el metodo listarTodos del modelo
		//guardar la tabla en una propiedad
		$this->tabla = $modelo->listar();
	}

	function agregar()
	{
		$modelo = $this->cargarModelo("proveedor_model");

		$modelo->ruc = $_POST["txtRuc"];
		$modelo->razonSocial = $_POST["txtRazonSocial"];
		$modelo->direccion = $_POST["txtDireccion"];
		$modelo->tipoPago = $_POST["txtTipoPago"];
		
		$modelo->agregar();

		header("refresh:0;" . constant("URL") . "proveedores");
	}

	function editar()
	{
		if (isset($_GET["v"])) {
			//Cargar el modelo
			$modelo = $this->cargarModelo("proveedor_model");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->codigo = base64_decode($_GET["v"]);
			//Ejecutar el metodo de busqueda del MODELO
			$this->fila = $modelo->buscarById();
		}
		//Enviar a la VISTA
		require_once ("views/proveedor_editar.php");	
	}

	function actualizar()
	{
		//Recibir los datos enviados por el formulario
		//con el metodo POST y luego procede a ACTUALIZAR en la BD

		//Cargar el modelo
		$modelo = $this->cargarModelo("proveedor_model");

		$modelo->ruc = $_POST["txtRuc"];
		$modelo->razonSocial = $_POST["txtRazonSocial"];
		$modelo->direccion = $_POST["txtDireccion"];
		$modelo->tipoPago = $_POST["txtTipoPago"];
		$modelo->codigo = $_POST["txtCodigo"];
		
		//Ejecutar el metodo Actualizar del modelo
		$modelo->actualizar();

		//Redireccionar
		header("refresh:0;" . constant("URL") . "proveedores");
	}

	function eliminar()
	{
		if (isset($_GET["v"])) 
		{
			//Cargar el modelo
			$modelo = $this->cargarModelo("proveedor_model");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->codigo = base64_decode($_GET["v"]);
			//Ejecutar la eliminacion
			$modelo->eliminar();
		}
		//Redireccionar
		header("refresh:0;" . constant("URL") . "proveedores");
	}



}

?>