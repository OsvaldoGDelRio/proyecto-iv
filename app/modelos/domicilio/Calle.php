<?php
namespace app\modelos\domicilio;

class Calle
{
    private $_calle;

    public function __construct(string $calle)
    {
        $this->_calle = $this->setCalle($calle);
    }

    public function calle(): string 
    {
        return $this->_calle;
    }

    private function setCalle(string $calle): string
    {
        return $calle;
    }
}