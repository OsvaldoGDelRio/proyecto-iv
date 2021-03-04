<?php
namespace app\modelos\telefono;

use Exception;

class Telefono
{
    private $_telefono;

    public function __construct(int $telefono)
    {
        $this->_telefono = $this->setTelefono($telefono);
    }

    public function telefono(): int
    {
        return $this->_telefono;
    }

    private function setTelefono(int $telefono): int
    {
        if(strlen($telefono) !== 10)
        {
            throw new Exception("El numero de telefono no es correcto");
        }

        return $telefono;
    }
}