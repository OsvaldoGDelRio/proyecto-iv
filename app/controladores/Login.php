<?php
namespace app\controladores;
use app\modelos\factory\FactoryInterface;

class Login
{
    private $_factory;

    public function __construct(FactoryInterface $Factory)
    {
        $this->_factory = $Factory;
    }

    public function Index(): void
    {
        echo 'PROYECTO IV';        
    }
}
