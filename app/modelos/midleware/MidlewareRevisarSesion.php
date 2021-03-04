<?php
namespace app\modelos\midleware;

use app\modelos\http\Peticion;
use app\modelos\factory\FactoryInterface;
use app\modelos\midleware\MidlewareInterface;

class MidlewareRevisarSesion implements MidlewareInterface
{
    private $_factory;

    public function __construct(FactoryInterface $Factory)
    {
        $this->_factory = $Factory;
    }

    public function __invoke(Peticion $peticion, callable $next)
    {
        
        $sesion = $this->_factory->crear('app\modelos\sesion\CrearRevisarSesion',array());
        
        if(!$sesion->laSesionExiste())
        {
            if($peticion->controlador() !== '\app\controladores\RevisarCredenciales')
            {
                $peticion = $this->_factory->crear('app\modelos\http\CrearPeticion', array(
                    'url' => ['url' => 'Login']
                ));
            }
        }
        else
        {
            if($peticion->controlador() == '\app\controladores\Login' || $peticion->controlador() == '\app\controladores\RevisarCredenciales')
            {
                $peticion = $this->_factory->crear('app\modelos\http\CrearPeticion', array(
                    'url' => ['url' => 'Inicio']
                ));
            }
        }
    
        return $next($peticion);

    }
}