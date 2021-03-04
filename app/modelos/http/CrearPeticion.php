<?php
namespace app\modelos\http;

use app\modelos\factory\FactoryClassInterface;

class CrearPeticion implements FactoryClassInterface
{
    public function crear(array $array): Peticion
    {
        $enlace = new Enlace($array['url']);

        return new Peticion(
            new Controlador($enlace),
            new Metodo($enlace),
            new Parametros($enlace, new Metodo($enlace))
        );
    }
}