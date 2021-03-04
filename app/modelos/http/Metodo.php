<?php
namespace app\modelos\http;

use app\modelos\http\Enlace;
use const CONTROLADORES;
use const METODOPORDEFECTO;

class Metodo
{
    private $_url;
    
    public function __construct(Enlace $url)
    {
        $this->_url = $url->enlace();
    }

    public function metodo(): string
    {
        if(!isset($this->_url[1]))
        {
            return METODOPORDEFECTO;
        }
        
        if(strlen($this->_url[1]) < 1)
        {
            return METODOPORDEFECTO;
        }

        if(!method_exists(CONTROLADORES.$this->_url[0], $this->_url[1]))
        {
            return METODOPORDEFECTO;
        }

        return $this->_url[1];
    }
}