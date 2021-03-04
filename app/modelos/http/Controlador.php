<?php
namespace app\modelos\http;

use app\modelos\http\Enlace;
use const CONTROLADORES;
use const CONTROLADORPORDEFECTO;
use const DIRCONTROLADORES;

class Controlador
{
    private $_url;
    
    public function __construct(Enlace $url)
    {
        $this->_url = $url->enlace();
    }

    public function controlador(): string
    {
        if(!isset($this->_url[0]))
        {
            return CONTROLADORPORDEFECTO;
        }
        
        if(strlen($this->_url[0]) < 1)
        {
            return CONTROLADORPORDEFECTO;
        }

        if(!file_exists(DIRCONTROLADORES.$this->_url[0].'.php'))
        {   
            return CONTROLADORPORDEFECTO;
        }

        if(!class_exists(CONTROLADORES.$this->_url[0]))
        {
            return CONTROLADORPORDEFECTO;
        }

        return CONTROLADORES.$this->_url[0];
    }
}