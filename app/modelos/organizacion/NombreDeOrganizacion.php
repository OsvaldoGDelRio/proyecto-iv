<?php
namespace app\modelos\organizacion;

class NombreDeOrganizacion
{
    private $_nombre;

    public function __construct(string $nombre)
    {
        $this->_nombre = $this->setNombre($nombre);
    }

    public function nombre(): string
    {
        return $this->_nombre;
    }

    private function setNombre(string $nombre): string
    {
        return $nombre;
    }
}