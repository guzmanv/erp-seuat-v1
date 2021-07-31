<?php

class Ingresos extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Ingresos()
	{
		$data['page_tag'] = "Ingresos";
		$data['page_name'] = "ingresos";
		$data['page_title'] = "Administración de ingresos";
		$data['page_functions_js'] = "functions_ingresos.js";
		$this->views->getView($this,"ingresos",$data);
	}

		public function getIngresos()
		{
			$arrData = $this->model->selectPersonas();
			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['estatus'] == 1)
				{
					$arrData[$i]['estatus'] = '<span class="badge badge-primary">Activo</span>';
				}else{
					$arrData[$i]['estatus'] = '<span class="badge badge-secondary">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">

				<button class="btn btn-outline-secondary btn-xs icono-color-principal btnPermisosRol" onClick="fntPermisos('.$arrData[$i]['id'].')" title="Permisos"> &nbsp;&nbsp; <i class="fas fa-user-graduate icono-azul"></i> &nbsp; Colegiaturas</button>
				<button class="btn btn-outline-secondary btn-xs icono-color-principal btnPrmisosRol" onClick="fntPermisos('.$arrData[$i]['id'].')" title="Permisos"> &nbsp;&nbsp; <i class="fas fa-store icono-azul"></i> &nbsp; Servicios</button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		} 

	

		
}

?>