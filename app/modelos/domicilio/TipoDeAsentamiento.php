<?php
namespace app\modelos\domicilio;

class TipoDeAsentamiento
{
    private $tipoDeAsentamiento;

    public function __construct(string $tipoDeAsentamiento)
    {
        $this->tipoDeAsentamiento = $this->setTipoDeAsentamiento($tipoDeAsentamiento);
    }

    public function tipoDeAsentamiento(): string
    {
        return $this->tipoDeAsentamiento;
    }

    private function setTipoDeAsentamiento(string $tipoDeAsentamiento): string
    {
        return $tipoDeAsentamiento;
    }
}