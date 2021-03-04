<?php
namespace app\modelos\persona;

class Sexo
{
    private $_sexo;

    public function __construct(string $Sexo)
    {
        $this->_sexo = $this->setSexo($Sexo);
    }

    public function sexo(): string
    {
        return $this->_sexo;
    }

    private function setSexo(string $Sexo): string
    {
        return $Sexo;
    }
}