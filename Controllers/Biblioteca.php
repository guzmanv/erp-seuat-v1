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
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administración de Biblioteca";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"administrador_categorias",$data);
	}
	public function getCategorias(){
		$arrData = $this->model->selectRoles();
			for ($i=0; $i < count($arrData); $i++) {
				var_dump($arrData[$i]);
				/*
			
				if($arrData[$i]['estatus'] == 1)
				{
					$arrData[$i]['estatus'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['estatus'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['id'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';*/
			}
			//echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}
}
?>