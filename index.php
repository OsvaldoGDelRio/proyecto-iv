<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Declaramos las clases a usar
 */
use app\nucleo\App;
use app\modelos\factory\Factory;
use app\modelos\contenedor\Contenedor;
use app\modelos\midleware\MidlewareStack;

/**
 * Ambiente
 */
define ('AMBIENTE', 'DEV');


if(AMBIENTE == 'DEV')
{
    /**
     * Configuracion del sitio 
     */
    define ('URLBASE', 'http://localhost/proyecto-iv/');
    /**
     *  Base de datos
     */
    define ('DB_HOST', '127.0.0.1');
    define ('DB_NAME', 'proyectoiv');
    define ('DB_USER', 'root');
    define ('DB_PASS', '');
    /**
     * GOOGLE CAPTACHA KEYS
     */
    define ('LOGIN_PUBLIC_TOKEN', 'aaaaaa');
    define ('LOGIN_PRIVATE_TOKEN', 'aaaaa');
}
else
{
    /**
     * Configuracion del sitio 
     */
    define ('URLBASE', '');
    /**
     *  Base de datos
     */
    define ('DB_HOST', '127.0.0.1');
    define ('DB_NAME', '');
    define ('DB_USER', '');
    define ('DB_PASS', '');
    /**
     * GOOGLE CAPTACHA KEYS
     */
    define ('LOGIN_PUBLIC_TOKEN', 'sssss');
    define ('LOGIN_PRIVATE_TOKEN', 'sssss');
}

/**
 * Constantes
 */

define ('ROOT', __DIR__.'/');
define ('APP', '\\app\\');
define ('CONTROLADORES', APP.'controladores\\');
define ('CONTROLADORPORDEFECTO',CONTROLADORES.'Login');
define ('METODOPORDEFECTO', 'Index');

/**
 * Constantes de directorios
 */

define ('DIRCONTROLADORES', 'app/controladores/');

/**
 *  Controladores exclusivos por rol
 */
define('SEGURIDAD', array(
    '1' => array(
        'Admin'
    ),
    '2' => array(
        'Usuario'
    )
)); 
/**
 * Iniciamos las clases
 */
$factory = new Factory();

$peticion = $factory->crear('app\modelos\http\CrearPeticion',array(
    'url' => $_REQUEST
));
$app = new App(new MidlewareStack());

$contenedor = new Contenedor();
/**
 * Agregamos a midleware
 */
$app->add(array(
    $contenedor->get('app\modelos\midleware\MidlewareRevisarSesion'), 
    $contenedor->get('app\modelos\midleware\MidlewareRevisarPermisos'),
    $contenedor->get('app\modelos\midleware\MidlewareEjecutarControlador')     
));
/**
 * Ejecutamos la peticion
 */
$app->run($peticion);