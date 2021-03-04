<?php
namespace app\modelos\factory;

interface FactoryClassInterface
{
    public function crear(array $array):object;
}