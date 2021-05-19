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
		$data['page_title'] = "Dashboard de Biblioteca";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"biblioteca",$data);
	}
	public function NuevaCategoria(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"agregar_categoria",$data);
	}
	public function AdministrarCategorias(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"administrador_categorias",$data);
	}
	public function AgregarAutor(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"agregar_autor",$data);
	}
	public function AdministrarAutores(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"administrador_autores",$data);
	}
	public function AgregarLibros(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"agregar_libro",$data);
	}
	public function AdministrarLibros(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"administrador_libros",$data);
	}
	public function NuevoPrestamo(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"nuevo_prestamo",$data);
	}
	public function AdministrarPrestamos(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"administrador_prestamos",$data);
	}
	public function NuevoEstudiante(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"nuevo_estudiante",$data);
	}
	public function ListaEstudiantes(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"administrador_estudiante",$data);
	}
	public function SubirMasivo(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_biblioteca.js";
		$this->views->getView($this,"masivo_estudiante",$data);
	}
	public function getCategorias(){
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
	}
}
?>