<?php
namespace app\modelos\sesion;

use app\modelos\factory\FactoryClassInterface;

use app\modelos\sesion\RevisarSesion;

class CrearRevisarSesion implements FactoryClassInterface
{
    public function crear(array $array): RevisarSesion
    {
        return new RevisarSesion;
    }
}