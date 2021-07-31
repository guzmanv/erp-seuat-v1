<?php

	class IngresosModel extends Mysql
	{
		//public $intIdPersonas;
		//public $strRol;
		//public $strDescripcion;
		//public $intEstatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectPersonas()
		{
			//Extraer Personas
			$sql = "SELECT * FROM t_personas WHERE estatus !=0 and id_categorias_personas = 1 ";
			$request = $this->select_all($sql);
			return $request;
		}
    }

?>