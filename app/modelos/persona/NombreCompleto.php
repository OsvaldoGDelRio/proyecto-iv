<?php
namespace app\modelos\persona;
use app\modelos\persona\{Nombres,PrimerApellido,SegundoApellido};

class NombreCompleto
{
    private $_nombres;
    private $_primerApellido;
    private $_segundoApellido;

    public function __construct
    (
        Nombres $Nombres,
        PrimerApellido $PrimerApellido,
        SegundoApellido $SegundoApellido 
    )
    {
        $this->_nombres = $Nombres;
        $this->_primerApellido = $PrimerApellido;
        $this->_segundoApellido = $SegundoApellido;
    }

    public function nombreCompleto(): string
    {
        $espacio = '';

        if(strlen($this->segundoApellido()) > 0)
        {
            $espacio = ' ';
        }

        return $this->nombres().' '.$this->primerApellido().$espacio.$this->segundoApellido();
    }

    public function nombres()
    {
        return $this->_nombres->nombres();
    }

    public function primerApellido()
    {
        return $this->_primerApellido->primerApellido();
    }

    public function segundoApellido()
    {
        return $this->_segundoApellido->segundoApellido();
    }
}