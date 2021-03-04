<?php
namespace app\modelos\persona;

class Persona
{
    private $_nombreCompleto;
    private $_fechaDeNacimiento;
    private $_sexo;

    public function __construct
    (
        Nombrecompleto $NombreCompleto,
        FechaDeNacimiento $FechaDeNacimiento,
        Sexo $Sexo
    )
    {
        $this->_nombreCompleto = $NombreCompleto;
        $this->_fechaDeNacimiento = $FechaDeNacimiento;
        $this->_sexo = $Sexo;
    }

    public function nombreCompleto(): string
    {
        return $this->_nombreCompleto->nombreCompleto();
    }

    public function nombres(): string
    {
        return $this->_nombreCompleto->nombres();
    }

    public function primerApellido(): string
    {
        return $this->_nombreCompleto->primerApellido();
    }

    public function segundoApellido(): string
    {
        return $this->_nombreCompleto->segundoApellido();
    }

    public function fechaDeNacimiento(): string
    {
        return $this->_fechaDeNacimiento->fechaDeNacimiento();
    }

    public function sexo(): string
    {
        return $this->_sexo->sexo();
    }
}