<?php
namespace app\modelos\logotipo;

class Logotipo
{
    private $_logotipo;

    public function __construct(string $localizacion)
    {
        $this->_logotipo = $this->setLogotipo($localizacion);
    }

    public function logotipo(): string 
    {
        return $this->_logotipo;
    }

    private function setLogotipo(string $logotipo): string
    {
        return $logotipo;
    }
}