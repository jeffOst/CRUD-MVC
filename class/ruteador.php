<?php

require_once 'controllers/errores.php';

class Ruteador
{
	
	function __construct()
	{
		//Instanciar la clase errores
        $this->error = new Errores();
		//Ejecutar la funcion iniciar
		$this->iniciar();
	}

	//Funcion iniciar:
	function iniciar(){
		
		//Recoger la variable URL enviado por GET
		//y darle FORMATO
		if (isset($_GET["url"])) {
			
			$url=$_GET["url"];
		}else{
			//Controlador por defecto
			$url="inicio";
		}

		//Eliminar el "/" final
		$url=rtrim($url,"/");
		//Subdividir la URL
		$url=explode("/", $url);
		
		//Invocar a los CONTROLADORES
		$filename="controllers/".$url[0].".php";

		if (file_exists($filename)) {
			//Incluir el archivo del controlador
			require_once($filename);
			
			//Instanciar el CONTROLADOR
			$controlador = new $url[0];
	
			//Invocar al METODO
			if (isset($url[1])) {
   				//Ejecutar el metodo
				if(method_exists($controlador,$url[1])){
                    $controlador->{$url[1]}();
                }else{
					//Mostrar mensaje de  error si no existe el metodo
                    //Error 404
                    $this->error->enviarError(404,"No se ejecuto la solicitud");
                }

			}else{
				//Mostrar vista del metodo
                $controlador->renderizar();
            }

		}else{
			//Mostrar mensaje de  error si no existe el metodo
            //Error 404
            $this->error->enviarError(404,"NO EXISTE LA PAGINA");
		}
	}

}

?>