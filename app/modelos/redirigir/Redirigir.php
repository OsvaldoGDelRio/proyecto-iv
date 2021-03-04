<?php
namespace app\modelos\redirigir;

use const URLBASE;

class Redirigir
{
	/**
	 * @param null|string $metodo
	 */
	public function a(string $location, ?string $metodo = null): void
	{
		header('Location: ' . URLBASE.$location.'/'.$metodo);
		exit();
	}
}