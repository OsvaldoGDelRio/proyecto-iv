<?php
namespace app\modelos\persona;
use DateTime;

class FechaDeNacimiento
{
    private $_fechaDeNacimiento;

    public function __construct(string $FechaDeNAcimiento)
    {
        $this->_fechaDeNacimiento = $this->setFechaDeNacimiento($FechaDeNAcimiento);
    }

    public function fechaDeNAcimiento()
    {
        return $this->_fechaDeNacimiento;
    }

    private function setFechaDeNacimiento(string $FechaDeNAcimiento): string
    {
        $FechaDeNAcimiento = new DateTime($FechaDeNAcimiento);

        return $FechaDeNAcimiento->format('d-m-Y');
    }
}