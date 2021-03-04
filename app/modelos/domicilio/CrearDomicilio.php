<?php
namespace app\modelos\domicilio;

use app\modelos\factory\FactoryClassInterface;

class CrearDomicilio implements FactoryClassInterface
{
    public function crear(array $array): Domicilio
    {
        return new Domicilio(
            new Calle($array['calle']),
            new NumeroExterior($array['numeroExterior']),
            new NumeroInterior($array['numeroInterior']),
            new TipoDeAsentamiento($array['tipoDeAsentamiento']),
            new Asentamiento($array['asentamiento']),
            new Municipio($array['municipio']),
            new Estado($array['estado']),
            new CodigoPostal($array['codigoPostal'])
        );  
    }   
}