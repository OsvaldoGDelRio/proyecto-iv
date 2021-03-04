<?php
namespace app\modelos\midleware;
use app\modelos\http\Peticion;
use app\modelos\contenedor\Contenedor;
use app\modelos\factory\FactoryInterface;
use app\modelos\midleware\MidlewareInterface;

class MidlewareEjecutarControlador implements MidlewareInterface
{
    private $_factory;

    public function __construct(FactoryInterface $Factory)
    {
        $this->_factory = $Factory;
    }
    
    public function __invoke(Peticion $peticion, callable $next)
    {

        $contenedor = new Contenedor;

        $controlador = $contenedor->get($peticion->controlador());

        call_user_func_array([$controlador,$peticion->metodo()],$peticion->parametros());
        
        return $next($peticion);
    }
}