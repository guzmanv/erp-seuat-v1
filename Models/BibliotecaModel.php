<?php

	class bibliotecaModel extends Mysql
	{
		public $intIdrol;
		public $strRol;
		public $strDescripcion;
		public $intEstatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectCategorias()
		{
			//Extraer Roles
			$sql = "SELECT * FROM libros_categorias";
			$request = $this->select_all($sql);
			return $request;
		}
	}
?>