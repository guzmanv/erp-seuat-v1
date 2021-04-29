<?php

	class rolesModel extends Mysql
	{
		public $intIdrol;
		public $strRol;
		public $strDescripcion;
		public $intEstatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectRoles()
		{
			//Extraer Roles
			$sql = "SELECT * FROM rol WHERE estatus !=0";
			$request = $this->select_all($sql);
			return $request;
		}
	}
?>