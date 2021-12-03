<?php
class Errores extends Controlador
{

    public $codigo;
    public $mensaje;

    function __construct()
    {
        parent::__construct();
    }
    
    public function renderizar($vista="errores",$mensaje=""){
        $this->vista->mensaje = $mensaje;
        $this->vista->mostrarVista($vista);
    }

    public function enviarError($codigo,$mensaje)
    {
        $this->asignarError($codigo,$mensaje);
        $this->renderizar("errores",$mensaje);
    }

    public function asignarError($codigo,$mensaje){
        $this->codigo = $codigo;
        $this->mensaje = $mensaje;
        http_response_code($codigo);
    }

}
?>