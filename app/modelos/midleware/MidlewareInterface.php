<?php
namespace app\modelos\midleware;

use app\modelos\http\Peticion;
use app\modelos\factory\FactoryInterface;

interface MidlewareInterface
{
    public function __construct(FactoryInterface $Factory);
    public function __invoke(Peticion $peticion, callable $next);
}