<?php
namespace app\modelos\domicilio;

class Municipio
{
    private $_municipio;

    public function __construct(string $municipio)
    {
        $this->_municipio = $this->setMunicipio($municipio);
    }

    public function municipio(): string
    {
        return $this->_municipio;
    }

    private function setMunicipio(string $municipio): string
    {
        return $municipio;
    }
}