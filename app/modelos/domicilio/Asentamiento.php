<?php
namespace app\modelos\domicilio;

class Asentamiento
{
    private $_asentamiento;

    public function __construct(string $asentamiento)
    {
        $this->_asentamiento = $this->setAsentamiento($asentamiento);
    }

    public function asentamiento(): string
    {
        return $this->_asentamiento;
    }

    private function setAsentamiento(string $asentamiento): string
    {
        return $asentamiento;
    }
}