<?php 
namespace app\modelos\contenedor;

interface ContenedorInterface
{
    public function get(string $abstract);
}