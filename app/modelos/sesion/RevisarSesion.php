<?php
namespace app\modelos\sesion;

class RevisarSesion
{
    public function laSesionExiste(): bool
    {

        if($this->existe())
        {
            return $this->laSesionExpiro();
        }

        return false;
    }

    public function laSesionExpiro(): bool
    {
        if((time() - $_SESSION['inicioDeSesion']) > $_SESSION['caducidadDeLaSesion'])
        {
            return false;
        }
           
        $this->actualizarTiempoDeSesion();

        return true;
    }

    private function actualizarTiempoDeSesion(): void
    {
        $_SESSION['inicioDeSesion'] = time();
    }

    private function existe(): bool
    {
        $array = array(
            'idDeLaSesion',
            'inicioDeSesion', 
            'caducidadDeLaSesion',
            'idDeUsuario',
            'correoDeUsuario',
            'rolDeUsuario'
        );

        foreach ($array as $value)
        {
            if(!isset($_SESSION[$value]))
            {
                return false;
            }
        }

        return true;
    }
}