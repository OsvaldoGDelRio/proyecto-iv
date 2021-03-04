<?php
namespace app\modelos\organizacion;

use app\modelos\persona\Persona;

class Director
{
    private $_persona;

    public function __construct(Persona $Persona)
    {
        $this->_persona = $Persona;
    }

    public function director(): Persona
    {
        return $this->_persona;
    }
}