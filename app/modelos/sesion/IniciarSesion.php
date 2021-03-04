<?php
namespace app\modelos\sesion;

use const SESIONID;

class IniciarSesion
{
    public function iniciar($idDeUsuario, $correoDeUsuario, $rolDeUsuario)
    {
        $_SESSION['idDeLaSesion'] = true;
        $_SESSION['inicioDeSesion'] = time();
        $_SESSION['caducidadDeLaSesion'] = 3600;
        $_SESSION['idDeUsuario'] = $idDeUsuario;
        $_SESSION['correoDeUsuario'] = $correoDeUsuario;
        $_SESSION['rolDeUsuario'] = (int) $rolDeUsuario;
    }
}