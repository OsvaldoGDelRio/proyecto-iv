<?php
namespace app\modelos\domicilio;

class NumeroExterior
{
    private $_numeroExterior;

    public function __construct(string $numeroExterior)
    {
        $this->_numeroExterior = $this->setNumeroExterior($numeroExterior);
    }

    public function numeroExterior(): string 
    {
        return $this->_numeroExterior;
    }

    private function setNumeroExterior(string $numeroExterior): string
    {
        return $numeroExterior;
    }
}