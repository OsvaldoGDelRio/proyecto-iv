<?php
namespace app\modelos\persona;
use app\excepciones\SegundoApellidoExeption;

Class SegundoApellido
{
    private $_apellido;

    public function __construct(?string $Apellido = null)
    {
        $this->_apellido = $this->setApellido($Apellido);  
    }

    public function segundoApellido(): string
    {
        return $this->_apellido; 
    }

    private function setApellido($Apellido): string
    {
        if(!$Apellido)
        {
            return '';
        }

        return $Apellido;
    }
}