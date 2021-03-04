<?php
namespace app\modelos\contenedor;
use ReflectionClass;
use RuntimeException;
use app\modelos\contenedor\ContenedorInterface;
/**
 * 
 */
class Contenedor implements ContenedorInterface
{	
	private $_bindings = [];

	private $_rutas = [
		'FactoryInterface' => 'app\\modelos\\factory\\Factory'
	];
	
	public function get(string $abstract)
	{
		if(interface_exists($abstract))
		{
			$interface = explode('\\', $abstract);
			$abstract = $this->_rutas[$interface[3]];
		}

		if(isset($this->_bindings[$abstract]))
		{
			return $this->_bindings[$abstract]($this);
		}
		
		$reflection = new ReflectionClass($abstract);

		$dependencies = $this->buildDependencies($reflection);

		return $reflection->newInstanceArgs($dependencies);
	}

	private function buildDependencies(ReflectionClass $reflection): array
	{
		if(!$constructor = $reflection->getConstructor())
		{
			return [];
		}

		$params = $constructor->getParameters();

		return array_map(function ($param)
		{
			if(!$type = $param->getType())
			{
				throw new RuntimeException();
			}

			return $this->get($type->getName());

		}, $params);

	}
}