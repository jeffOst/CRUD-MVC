<?php

class Inicio extends Controlador
{
	
	function __construct()
	{
        parent::__construct();
	}

	public function renderizar($vista = "inicio")
	{
        $this->mostrarVista($vista);
	}

}

?>