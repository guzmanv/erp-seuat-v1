<?php

class ReportesPlataformas extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Moodle()
	{
		$data['page_id'] = 3;
		$data['page_tag'] = "Moodle";
		$data['page_name'] = "moodle";
		$data['page_title'] = "Reportes de Moodle";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"moodle",$data);
	}
	/*public function getCategorias(){
		$arrData = $this->model->selectCategorias();
			for ($i=0; $i < count($arrData); $i++) {
				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}
				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['id'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}*/
}
?>