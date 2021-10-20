<?php
	class Categoria_servicios extends Controllers
    {
		public function __construct()
		{
			parent::__construct();
		}

		public function Categoria_servicios()
		{
           	$data['page_tag'] = "Categoría de servicios";
			$data['page_title'] = "Categoría servicios";
			$data['page_name'] = "categoria_servicios";
            $data['page_functions_js'] = "functions_categoria_servicios.js";
            $this->views->getView($this,"categoria_servicios",$data);
		}

        public function getCategoriaServicios()
		{
			$arrData = $this->model->selectCategoriaServicios();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['estatus'] == 1)
				{
					$arrData[$i]['estatus'] = '<span class="badge badge-dark">Activo</span>';
				}else{
					$arrData[$i]['estatus'] = '<span class="badge badge-secondary">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				
				<div class="btn-group">
					<button type="button" class="btn btn-outline-secondary btn-xs icono-color-principal dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-layer-group"></i> &nbsp; Acciones
					</button>
					<div class="dropdown-menu">
						<button class="dropdown-item btn btn-outline-secondary btn-sm btn-flat icono-color-principal btnPermisosRol" onClick="fntPermisos('.$arrData[$i]['id'].')" title="Permisos"> &nbsp;&nbsp; <i class="fas fa-key icono-azul"></i> &nbsp; Permisos</button>
						<button class="dropdown-item btn btn-outline-secondary btn-sm btn-flat icono-color-principal btnEditRol" onClick="fntEditRol('.$arrData[$i]['id'].')" data-toggle="modal" data-target="#ModalFormRol" title="Editar"> &nbsp;&nbsp; <i class="fas fa-pencil-alt"></i> &nbsp; Editar</button>
						<div class="dropdown-divider"></div>
						<button class="dropdown-item btn btn-outline-secondary btn-sm btn-flat icono-color-principal btnDelRol" onClick="fntDelRol('.$arrData[$i]['id'].')" title="Eliminar"> &nbsp;&nbsp; <i class="far fa-trash-alt "></i> &nbsp; Eliminar</button>
						<!--<a class="dropdown-item" href="#">link</a>-->
					</div>
				</div>


				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}
		


		public function setCategoria_servicios()
		{
			//if($_SESSION['permisosMod']['w']){
				$intIdCategoria_servicios = intval($_POST['idCategoria_servicios']);
				$strNombre_categoria =  strClean($_POST['txtNombre_categoria']);
				$intEstatus = intval($_POST['txtEstatus']);
				$strFecha_creacion = strClean($_POST['txtFecha_creacion']);
				$strFecha_actualizacion = intval($_POST['txtFecha_actualizacion']);
				$intId_usuario_creacion = intval($_POST['txtId_usuario_creacion']);
				$intId_usuario_actualizacion = intval($_POST['txtId_usuario_actualizacion']);


				if($intIdCategoria_servicios == 0)
				{
					//Crear
					$request_categoria_servicios = $this->model->insertCategoria_servicios($strNombre_categoria, $intEstatus, $strFecha_creacion, $strFecha_actualizacion, $intId_usuario_creacion, $intId_usuario_actualizacion);
					$option = 1;
				}else{
					//Actualizar
					$request_categoria_servicios = $this->model->updateRol($intIdCategoria_servicios, $strRol, $strDescipcion, $intStatus);
					$option = 2;
				}

				if($request_categoria_servicios > 0 )
				{
					if($option == 1)
					{
						$arrResponse = array('estatus' => true, 'msg' => 'Datos guardados correctamente.');
					}else{
						$arrResponse = array('estatus' => true, 'msg' => 'Datos Actualizados correctamente.');
					}
				}else if($request_categoria_servicios == 'exist'){
					
					$arrResponse = array('estatus' => false, 'msg' => '¡Atención! El Rol ya existe.');
				}else{
					$arrResponse = array("estatus" => false, "msg" => 'No es posible almacenar los datos.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			//}
			die();
		}


	}
?>