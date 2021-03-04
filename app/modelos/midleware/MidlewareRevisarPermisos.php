<?php
namespace app\modelos\midleware;

use app\modelos\http\Peticion;
use app\modelos\factory\FactoryInterface;
use app\modelos\midleware\MidlewareInterface;
use const SEGURIDAD;

class MidlewareRevisarPermisos implements MidlewareInterface
{
    private $_factory;

    public function __construct(FactoryInterface $Factory)
    {
        $this->_factory = $Factory;
    }
    
    public function __invoke(Peticion $peticion, callable $next)
    {
        $sesion = $this->_factory->crear('app\modelos\sesion\CrearRevisarSesion',array());
        
        if($sesion->laSesionExiste())
        {
            
        }

        return $next($peticion);
    }
}