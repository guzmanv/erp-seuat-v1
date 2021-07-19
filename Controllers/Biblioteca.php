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
		$data['page_functions_js'] = "functions_agregar_categoria.js";
		$this->views->getView($this,"agregar_categoria",$data);
	}
	public function AdministrarCategorias(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Categoria";
		$data['page_functions_js'] = "functions_administrar_categorias.js";
		$this->views->getView($this,"administrador_categorias",$data);
	}
	public function AgregarAutor(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Autor";
		$data['page_functions_js'] = "functions_agregar_autor.js";
		$this->views->getView($this,"agregar_autor",$data);
	}
	public function AdministrarAutores(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Autores";
		$data['page_functions_js'] = "functions_administrar_autores.js";
		$this->views->getView($this,"administrador_autores",$data);
	}
	public function AgregarLibros(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Agregar Libro";
		$data['categorias'] = $this->model->selectCategorias();
		$data['autor'] = $this->model->selectAutores();
		$data['page_functions_js'] = "functions_agregar_libros.js";
		$this->views->getView($this,"agregar_libro",$data);
	}
	public function AdministrarLibros(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Libros";
		$data['page_functions_js'] = "functions_administrar_libros.js";
		$this->views->getView($this,"administrador_libros",$data);
	}
	public function NuevoPrestamo(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Nuevo Prestamo";
		$data['page_functions_js'] = "functions_nuevo_prestamo.js";
		$this->views->getView($this,"nuevo_prestamo",$data);
	}
	public function AdministrarPrestamos(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Prestamos";
		$data['page_functions_js'] = "functions_administrar_prestamos.js";
		$this->views->getView($this,"administrador_prestamos",$data);
	}
	public function ListaEstudiantes(){
		$data['page_id'] = 3;
		$data['page_tag'] = "Biblioteca";
		$data['page_name'] = "biblioteca";
		$data['page_title'] = "Administrar Estudiantes";
		$data['page_functions_js'] = "functions_lista_estudiantes.js";
		$this->views->getView($this,"administrador_estudiante",$data);
	}
	public function getCategorias(){
		$arrData = $this->model->selectCategorias();
		
			for ($i=0; $i < count($arrData); $i++) {
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
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}
	public function getAutores(){
		$arrData = $this->model->selectAutores();
			for ($i=0; $i < count($arrData); $i++) {
				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['id'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
				$arrData[$i]['nombre_completo'] = $arrData[$i]['nombre_autor']." ".$arrData[$i]['apellido_paterno']." ".$arrData[$i]['apellido_materno'];
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}
	public function getLibros(){
		$arrData = $this->model->selectLibros();
			for ($i=0; $i < count($arrData); $i++) {
				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['id'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}
	public function getPrestamos(){
		$arrData = $this->model->selectPrestamos();
			for ($i=0; $i < count($arrData); $i++) {
				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['id'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}
	public function getEstudiantes(){
		$arrData = $this->model->selectEstudiantes();
			for ($i=0; $i < count($arrData); $i++) {
				
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				
				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['id'].'" title="Permisos"><i class="fas fa-key"></i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	}
	public function getDashboard(){
		$arrData = $this->model->selectDashboard();
		echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		die();
	}
	public function setCategoria(){
		$data = $_POST;
		$request = $this->model->insertCategoria($data);
		if($request)
			header("Location:".BASE_URL."/Biblioteca/NuevaCategoria?mssg=ok");
		
	}
	public function setAutor(){
		$data = $_POST;
		$request = $this->model->insertAutor($data);
		if($request)
			header("Location:".BASE_URL."/Biblioteca/AgregarAutor?mssg=ok");
	}
	public function setLibros(){
		$data = $_POST;
		$request = $this->model->insertLibro($data);
		if($request)
			header("Location:".BASE_URL."/Biblioteca/AgregarLibros?mssg=ok");
	}
	public function setPrestamos(){
		$data = $_POST;
		$request = $this->model->insertPrestamo($data);
		if($request)
			header("Location:".BASE_URL."/Biblioteca/NuevoPrestamo?mssg=ok");
	}
	/*Modal */
	function buscarNombreAlumnoModal(){
		$data = $_GET['val'];
		$arrData = $this->model->selectEstudianteModal($data);
		for ($i=0; $i < count($arrData); $i++) {
			$arrData[$i]['options'] = '<button type="button"  id="'.$arrData[$i]['mat_externa'].'" class="btn btn-primary" onclick="seleccionarAlumno(this)">Seleccionar</button>';

		}
		echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		die();;

	}
	function buscarISBNModal(){
		$data = $_GET['val'];
		$arrData = $this->model->selectLibroModal($data);
		for ($i=0; $i < count($arrData); $i++) {
			$arrData[$i]['options'] = '<button type="button" id="'.$arrData[$i]['id'].'"  isbn="'.$arrData[$i]['numero_isbn'].'" class="btn btn-primary" onclick="seleccionarLibro(this)">Seleccionar</button>';

		}
		echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		die();;

	}

}
?>