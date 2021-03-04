<?php

namespace app\nucleo;

use app\modelos\http\Peticion;
use app\modelos\midleware\MidlewareStack;
use app\modelos\midleware\MidlewareInterface;

class App
{
    protected $midleware;

    public function __construct(MidlewareStack $midleware)
    {
        $this->midleware = $midleware;
    }

    public function add(array $midlewares)
    {
        foreach (array_reverse($midlewares) as $midleware)
        {
            $this->do($midleware);
        }
    }

    private function do(MidlewareInterface $midleware)
    {
        $this->midleware->add($midleware);        
    }

    public function run(Peticion $Peticion)
    {
        $this->midleware->handle($Peticion);
    }


}