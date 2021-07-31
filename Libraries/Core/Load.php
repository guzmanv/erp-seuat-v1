<?php
	$controller = ucwords($controller);
	$controllerFile = "Controllers/".$controller.".php";
	if (file_exists($controllerFile))
	{
		require_once($controllerFile);
		$controller = new $controller();
		if (method_exists($controller, $method))
		{
			$controller->{$method}($params);
		}else{
			echo "No existe el método";
			//require_once("Controllers/Error.php");
		}
	}else{
		//require_once("Controllers/Error.php");
		echo "No existe controlador";
	}
?>