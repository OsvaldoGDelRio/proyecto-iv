<?php
namespace app\modelos\organizacion;

use app\modelos\rfc\RFC;
use app\modelos\persona\Persona;
use app\modelos\logotipo\Logotipo;
use app\modelos\telefono\Telefono;
use app\modelos\organizacion\Director;
use app\modelos\domicilio\InterfaceDomicilio;
use app\modelos\organizacion\NombreDeOrganizacion;

class Organizacion
{
    private $_nombre;
    private $_domicilio;
    private $_rfc;
    private $_telefono;
    private $_director;
    private $_logotipo;

    public function __construct
    (
        NombreDeOrganizacion $NombreDeOrganizacion,
        InterfaceDomicilio $Domicilio,
        RFC $RFC,
        Telefono $Telefono,
        Director $Director,
        Logotipo $Logotipo
    )
    {
        $this->_nombre = $NombreDeOrganizacion;
        $this->_domicilio = $Domicilio;
        $this->_rfc = $RFC;
        $this->_telefono = $Telefono;
        $this->_director = $Director;
        $this->_logotipo = $Logotipo;
    }

    public function nombre(): string
    {
        return $this->_nombre->nombre();
    }

    public function domicilio(): InterfaceDomicilio
    {
        return $this->_domicilio;
    }

    public function rfc(): string
    {
        return $this->_rfc->rfc();
    }

    public function telefono(): string
    {
        return $this->_telefono->telefono();
    }

    public function director(): Persona
    {
        return $this->_director->director();
    }

    public function logotipo(): string
    {
        return $this->_logotipo->logotipo();
    }
}