<?php
namespace app\modelos\domicilio;

use app\modelos\domicilio\Calle;
use app\modelos\domicilio\Estado;
use app\modelos\domicilio\Municipio;
use app\modelos\domicilio\Asentamiento;
use app\modelos\domicilio\CodigoPostal;
use app\modelos\domicilio\NumeroExterior;
use app\modelos\domicilio\NumeroInterior;
use app\modelos\domicilio\InterfaceDomicilio;

class Domicilio implements InterfaceDomicilio
{
    private $_calle;
    private $_numeroExterior;
    private $_numeroInterior;
    private $_tipoDeAsentamiento;
    private $_asentamiento;
    private $_municipio;
    private $_estado;
    private $_codigoPostal;

    public function __construct
    (
        Calle $Calle, 
        NumeroExterior $NumeroExterior,
        NumeroInterior $NumeroInterior,
        TipoDeAsentamiento $TipoDeAsentamiento,
        Asentamiento $Asentamiento,
        Municipio $Municipio,
        Estado $Estado,
        CodigoPostal $CodigoPostal 
    )
    {
        $this->_calle = $Calle;
        $this->_numeroExterior = $NumeroExterior;
        $this->_numeroInterior = $NumeroInterior;
        $this->_tipoDeAsentamiento = $TipoDeAsentamiento;
        $this->_asentamiento = $Asentamiento;
        $this->_municipio = $Municipio;
        $this->_estado = $Estado;
        $this->_codigoPostal = $CodigoPostal;
    }

    public function domicilio(): string
    {
        return 
        $this->calle().' '
        .$this->numeroExterior().' '
        .$this->numeroInterior().' '
        .$this->tipoDeAsentamiento().' '
        .$this->asentamiento().' '
        .$this->municipio().' '
        .$this->estado().' '
        .$this->codigoPostal();
    }

    public function calle(): string
    {
        return $this->_calle->calle();
    }

    public function numeroExterior(): string
    {
        return $this->_numeroExterior->numeroExterior();
    }

    public function numeroInterior(): string
    {
        return $this->_numeroInterior->numeroInterior();
    }

    public function tipoDeAsentamiento(): string
    {
        return $this->_tipoDeAsentamiento->tipoDeAsentamiento();
    }

    public function asentamiento(): string
    {
        return $this->_asentamiento->asentamiento();
    }

    public function municipio(): string
    {
        return $this->_municipio->municipio();
    }

    public function estado(): string
    {
        return $this->_estado->estado();
    }

    public function codigoPostal(): int
    {
        return $this->_codigoPostal->codigoPostal();
    }
}