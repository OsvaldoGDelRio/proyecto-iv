<?php
namespace app\modelos\factory;

interface FactoryInterface
{
    public function crear(string $nombreDeLaClase, array $parametros): object;
}