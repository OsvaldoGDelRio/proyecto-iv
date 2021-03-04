<?php
namespace app\modelos\midleware;

use app\modelos\http\Peticion;
use app\modelos\midleware\MidlewareInterface;

class MidlewareStack
{
    protected $start;

    public function __construct()
    {
        $this->start = function ($peticion){
            return $peticion;
        };
    }

    public function add(MidlewareInterface $midleware)
    {
        $next = $this->start;

        $this->start = function (Peticion $peticion) use ($midleware, $next)
        {
            return $midleware($peticion, $next);
        };
    }

    public function handle(Peticion $peticion)
    {
        return call_user_func($this->start, $peticion);
    }
}