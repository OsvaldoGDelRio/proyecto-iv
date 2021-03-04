<?php
namespace app\modelos\organizacion;

use app\modelos\factory\FactoryClassInterface;

class CrearOrganizacion implements FactoryClassInterface
{
    public function crear(array $array): Organizacion
    {
        return new Organizacion(
            new NombreDeOrganizacion($array['nombre']),
            $array['domicilio'],
            new \app\modelos\rfc\RFC($array['rfc']),
            new \app\modelos\telefono\Telefono($array['telefono']),
            new Director($array['director']),
            new \app\modelos\logotipo\Logotipo($array['logotipo']) 
        );
    }

}