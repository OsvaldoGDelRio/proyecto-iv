<?php
namespace app\modelos\domicilio;

use Exception;

class CodigoPostal
{
   private $_codigoPostal;

   public function __construct(int $codigoPostal)
   {
       $this->_codigoPostal = $this->setCodigoPostal($codigoPostal);
   }

   public function codigoPostal(): int
   {
       return $this->_codigoPostal;
   }

   public function setCodigoPostal(int $codigoPostal): int
   {
       if(strlen((string) $codigoPostal) < 5 || strlen((string) $codigoPostal) > 6)
       {
           throw new Exception("La longitud del Codigo Postal es incorrecta");
       }
       
       return $codigoPostal;
   }
}