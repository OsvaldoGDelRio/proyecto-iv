<?php
namespace app\modelos\rfc;

use Exception;

class RFC
{
    private $_rfc;

    public function __construct(string $rfc)
    {
        $this->_rfc = $this->setRFC($rfc);
    }

    public function rfc(): string
    {
        return $this->_rfc;
    }

    private function setRFC(string $rfc): string
    {
        if(strlen($rfc) < 12 || strlen($rfc) > 13)
        {
            throw new Exception("El RFC tiene una longitud invalida");
        }

        return $rfc;
    }
}