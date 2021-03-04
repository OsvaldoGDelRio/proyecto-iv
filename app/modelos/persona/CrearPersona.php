<?php
namespace app\modelos\persona;
use app\modelos\factory\FactoryClassInterface;

class CrearPersona implements FactoryClassInterface
{   
    public function crear(array $array): Persona
    {
        return new Persona(
            new NombreCompleto(
                new Nombres($array['nombres']),
                new PrimerApellido($array['primerApellido']),
                new SegundoApellido($this->segundoApellidoExiste($array))
            ),
            new FechaDeNacimiento($array['fechaDeNacimiento']),
            new Sexo($array['sexo'])
        );
    }

    private function segundoApellidoExiste(array $array): string
    {
        if(!isset($array['segundoApellido']))
        {
            return '';
        }

        return $array['segundoApellido'];
    }
}