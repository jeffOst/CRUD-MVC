<?php

class Usuarios extends Controlador
{
	
	function __construct()
	{
        parent::__construct();
	}

	public function renderizar($vista = "usuarios")
	{
        $this->mostrarVista($vista);
	}

	function mostrarDatos()
	{
		//Cargar el Modelo
		$modelo = $this->cargarModelo("usuario_model");
		//Ejecutar el metodo listar del modelo
		$data = $modelo->listar();
    	//Envio el array final en formato json a AJAX
        echo json_encode($data);
	}

	function guardar()
	{
		$modelo = $this->cargarModelo("usuario_model");

		$modelo->id = $_POST["id"];
		$modelo->nombre = $_POST["nombre"];
		$modelo->correo = $_POST["correo"];
		$modelo->tipo = $_POST["tipo"];
		
		if($modelo->id == 0){
			$modelo->agregar();
		}else{
			$modelo->actualizar();
		}

	}

	function eliminar()
	{
		if (isset($_POST["id"])) 
		{
			//Cargar el modelo
			$modelo = $this->cargarModelo("usuario_model");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->id = $_POST["id"];
			//Ejecutar la eliminacion
			$modelo->eliminar();
		}
	}

}

?>