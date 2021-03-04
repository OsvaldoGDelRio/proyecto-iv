<?php
namespace app\modelos\domicilio;

use app\modelos\domicilio\Calle;
use app\modelos\domicilio\Estado;
use app\modelos\domicilio\Municipio;
use app\modelos\domicilio\Asentamiento;
use app\modelos\domicilio\CodigoPostal;
use app\modelos\domicilio\NumeroExterior;
use app\modelos\domicilio\NumeroInterior;
use app\modelos\domicilio\TipoDeAsentamiento;

interface InterfaceDomicilio
{
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
    );

    public function domicilio(): string;
    public function calle(): string;
    public function numeroExterior(): string;
    public function numeroInterior(): string;
    public function tipoDeAsentamiento(): string;
    public function asentamiento(): string;
    public function municipio(): string;
    public function estado(): string;
    public function codigoPostal(): int;
}