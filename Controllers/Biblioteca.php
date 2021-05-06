<?php

class Biblioteca extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Biblioteca()
	{
		$data['page_id'] = 3;
		$data['page_tag'] = "Roles Usuario";
		$data['page_name'] = "rol_usuario";
		$data['page_title'] = "Administración de roles";
		$data['page_functions_js'] = "functions_roles.js";
		$this->views->getView($this,"biblioteca",$data);
	}
}

?>