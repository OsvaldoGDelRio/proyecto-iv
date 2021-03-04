<?php
namespace app\modelos\domicilio;

class Estado 
{
    private $_estado;

    public function __construct(string $estado)
    {
        $this->_estado = $this->setEstado($estado);
    }

    public function estado(): string
    {
        return $this->_estado;
    }

    private function setEstado(string $estado): string
    {
        return $estado;
    }
}