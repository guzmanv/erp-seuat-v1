<?php

	class RolesModel extends Mysql
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

		public function selectRol(int $idrol)
		{
			//Buscar Roles
			$this->intIdrol = $idrol;
			$sql = "SELECT * FROM rol WHERE id = $this->intIdrol";
			$request = $this->select($sql);
			return $request;
		}

		public function insertRol(string $rol, string $descripcion, int $estatus){

			$return = "";
			$this->strRol = $rol;
			$this->strDescripcion = $descripcion;
			$this->intEstatus = $estatus;

			$sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}' ";
			$request = $this->select_all($sql);

			if (empty($request)) 
			{
				$query_insert = "INSERT INTO rol(nombrerol,descripcion,estatus) VALUES(?,?,?)";
				$arrData = array($this->strRol, $this->strDescripcion, $this->intEstatus);
				$request_insert = $this->insert($query_insert,$arrData);
				$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function updateRol(int $idrol, string $rol, string $descripcion, int $estatus){
			$this->intIdrol = $idrol;
			$this->strRol = $rol;
			$this->strDescripcion = $descripcion;
			$this->intEstatus = $estatus;

			$sql = "SELECT * FROM rol WHERE nombrerol = '$this->strRol' AND id != $this->intIdrol";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE rol SET nombrerol = ?, descripcion = ?, estatus = ? WHERE id = $this->intIdrol ";
				$arrData = array($this->strRol, $this->strDescripcion, $this->intEstatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}

		public function deleteRol(int $idrol)
		{
			$this->intIdrol = $idrol;
			$sql = "SELECT * FROM t_personas WHERE rolid = $this->intIdrol";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE rol SET estatus = ? WHERE id = $this->intIdrol ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}
	}
?>