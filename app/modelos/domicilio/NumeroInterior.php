<?php
namespace app\modelos\domicilio;

class NumeroInterior
{
    private $_numeroInterior;

    public function __construct(?string $numeroInterior = null)
    {
        $this->_numeroInterior = $this->setNumeroInterior($numeroInterior);
    }

    public function numeroInterior(): string 
    {
        return $this->_numeroInterior;
    }

    private function setNumeroInterior(?string $numeroInterior = null): string
    {
        if($numeroInterior === null)
        {
            return '';
        }
        
        return $numeroInterior;
    }
}