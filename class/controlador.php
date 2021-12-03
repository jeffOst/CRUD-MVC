<?php

class Controlador
{
	
	function __construct()
	{
		//Instanciamos la clase vista
        $this->vista = new Vista();
	}

	//Funcion mostrarVista del Controlador
    public function mostrarVista($vista)
    {
		//Invocamos al metodo mostrarVista de la clase Vista
        $this->vista->mostrarVista($vista);
    }

	function cargarModelo($nombre)
	{
		//Generar el nombre del archivo
		$fileName = "models/" . $nombre . ".php";

		//inlcuir el archivo
		require_once($fileName);

		//Instanciar el modelo
		$modelo = new $nombre();

		//Retornar el MODELO
		return $modelo;
	} 

}

?>