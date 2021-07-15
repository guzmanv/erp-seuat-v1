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
			$sql = "SELECT * FROM t_categorias_libros";
			$request = $this->select_all($sql);
			return $request;
		}
		public function selectAutores()
		{
			$sql = "SELECT * FROM t_autores";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectLibros()
		{
			$sql = "SELECT lb.id,lb.nombre_libro,catlb.nombre_categoria_libro,CONCAT(autlb.nombre_autor,' ',autlb.apellido_paterno,' ',
			autlb.apellido_materno) AS nombre_autor,lb.numero_isbn,inv.cantidad FROM t_libros AS lb INNER JOIN t_categorias_libros 
			AS catlb ON lb.id_categorias = catlb.id INNER JOIN t_autores AS autlb ON lb.id_autores = autlb.id
			INNER JOIN t_inventarios AS inv ON lb.id = inv.id_libros";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectPrestamos()
		{
			$sql = "SELECT * FROM t_prestamo_libros INNER JOIN t_estudiante ON t_prestamo_libros.alumnoId = t_estudiante.id 
			INNER JOIN t_libros ON t_prestamo_libros.libroId = t_libros.id";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectEstudiantes()
		{
			//Extraer Roles
			$sql = "SELECT * FROM estudiante";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectDashboard(){
			$sql_libros = "SELECT COUNT(id) AS id FROM t_libros";
			$req_libros = $this->select_all($sql_libros);
			$data['req_libros'] = $req_libros[0]['id'];
			$sql_prestamos = "SELECT COUNT(id) AS id FROM t_prestamo_libros";
			$req_prestamos = $this->select_all($sql_prestamos);
			$data['req_prestamos'] = $req_prestamos[0]['id'];
			$sql_devoluciones = "SELECT COUNT(id) AS id FROM t_prestamo_libros";
			$req_devoluciones = $this->select_all($sql_devoluciones);
			$data['req_devoluciones'] = $req_devoluciones[0]['id'];
			$sql_usuarios = "SELECT COUNT(id) AS id FROM t_personas";
			$req_usuarios = $this->select_all($sql_usuarios);
			$data['req_usuarios'] = $req_usuarios[0]['id'];
			$sql_autores = "SELECT COUNT(id) AS id FROM t_autores";
			$req_autores = $this->select_all($sql_autores);
			$data['req_autores'] = $req_autores[0]['id'];
			$sql_categorias = "SELECT COUNT(id) AS id  FROM t_categorias_libros";
			$req_categorias= $this->select_all($sql_categorias);
			$data['req_categorias'] = $req_categorias[0]['id'];
			return $data;
			
		}

		public function insertCategoria($data){
			$nombreCategoria = $data['nombre_categoria'];
			$estatus = 1;
			if($data['radio'] == 'activo')
				$estatus = 1;
			else
				$estatus = 0;
			$sql = "INSERT INTO t_categorias_libros (nombre_categoria_libro,estatus,fecha_creacion,fecha_actualizacion,id_personas) 
					VALUES (?,?,NOW(),NOW(),?)";
			$request = $this->insert($sql,array($nombreCategoria,$estatus,1));
			return $request;
		}

		public function insertAutor($data){
			$nombreAutor = $data['nombre_autor'];
			$apellidoPaternoAutor = $data['apellido_paterno_autor'];
			$apellidoMaternoAutor = $data['apellido_materno_autor'];
			$sql = "INSERT INTO t_autores (nombre_autor,apellido_paterno,apellido_materno,fecha_creacion,fecha_actualizacion,id_personas) 
					VALUES (?,?,?,NOW(),NOW(),?)";
			$request = $this->insert($sql,array($nombreAutor,$apellidoPaternoAutor,$apellidoMaternoAutor,1));
			return $request;
		}
		
		public function insertLibro($data){
			$sql = "INSERT INTO t_libros (nombre_libro,numero_isbn,anio,clasificacion_dewey,clasificacion_interna,fecha_alta,fecha_actualizacion,
					id_categorias,id_autores,id_ediciones,id_editoriales,id_estado_libros,id_personas) 
					VALUES (?,?,?,?,?,NOW(),NOW(),?,?,?,?,?,?)";
			$request = $this->insert($sql,array($data['nombre_libro'],$data['isbn'],2021,$data['dcc'],12,$data['nombre_categoria'],
			$data['nombre_autor'],2002,2002,2,1));
			if($request){
				$sqlInv = "INSERT INTO t_inventarios(id_libros,cantidad,id_categorias_inventarios,id_personas)
							VALUES (?,?,?,?)";
				$requestInv = $this->insert($sqlInv,array($request,$data['ct'],1,1));
			}
			return $request;
		}
	}
?>