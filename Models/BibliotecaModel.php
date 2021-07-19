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
			$sql = "SELECT lb.id,lb.titulo_libro,lb.subtitulo_libro,catlb.nombre_categoria_libro,CONCAT(autlb.nombre_autor,' ',autlb.apellido_paterno,' ',
			autlb.apellido_materno) AS nombre_autor,lb.numero_isbn,inv.cantidad FROM t_libros AS lb INNER JOIN t_categorias_libros 
			AS catlb ON lb.id_categorias = catlb.id INNER JOIN t_autores AS autlb ON lb.id_autores = autlb.id
			INNER JOIN t_inventarios AS inv ON lb.id = inv.id_libros";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectPrestamos()
		{
			$sql = "SELECT pr.id,pr.fecha_devolucion,pr.fecha_prestamo,t_libros.numero_isbn,t_libros.nombre_libro,CONCAT(
				v_alumnos_matriculas.nombre_persona,' ',v_alumnos_matriculas.ap_paterno,' ',v_alumnos_matriculas.ap_materno) AS nombre_estudiante FROM t_prestamo_libros AS pr
				INNER JOIN v_alumnos_matriculas ON pr.id_alumnos = v_alumnos_matriculas.id
				INNER JOIN t_libros ON pr.id_libros = t_libros.id";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectEstudiantes()
		{
			$sql = "SELECT * FROM v_alumnos_matriculas";
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
			$sql_devoluciones = "SELECT COUNT(id) AS id FROM t_prestamo_libros WHERE estatus_devolucion = 1";
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
			$sql = "INSERT INTO t_libros (titulo_libro,subtitulo_libro,numero_isbn,anio,clasificacion_dewey,clasificacion_interna,fecha_alta,fecha_actualizacion,
					id_categorias,id_autores,id_ediciones,id_editoriales,id_estado_libros,id_personas) 
					VALUES (?,?,?,?,?,?,NOW(),NOW(),?,?,?,?,?,?)";
			$request = $this->insert($sql,array($data['titulo_libro'],$data['subtitulo_libro'],$data['isbn'],2021,$data['dcc'],12,$data['nombre_categoria'],
			$data['nombre_autor'],2002,2002,2,1));
			if($request){
				$sqlInv = "INSERT INTO t_inventarios(id_libros,cantidad,id_categorias_inventarios,id_personas)
							VALUES (?,?,?,?)";
				$requestInv = $this->insert($sqlInv,array($request,$data['ct'],1,1));
			}
			return $request;
		}
		/* Nuevo Prestamo */
		public function insertPrestamo($data){
			$isbn = $data['isbn'];
			$matricula = $data['matricula'];
			$dateDevoluicion = $data['date'];

			$sqlISBN = "SELECT id FROM t_libros WHERE numero_isbn = $isbn";
			$requestISBN = $this->select_all($sqlISBN);
			$idLibro = $requestISBN[0]['id'];

			$sqlMatricula = "SELECT id FROM v_alumnos_matriculas WHERE mat_externa = $matricula";
			$requestMatricula = $this->select_all($sqlMatricula);
			$idAlumno = $requestMatricula[0]['id'];
			
			$sql = "INSERT INTO t_prestamo_libros(fecha_prestamo,fecha_devolucion,estatus_devolucion,comentarios,id_libros,
					id_alumnos,id_tipo_prestamo_libros,id_personas) VALUES (NOW(),NOW(),?,?,?,?,?,?)";
			$request = $this->insert($sql,array(0,'sin comentarios',$idLibro,$idAlumno,1,1));
			return $request;
		}

		/*Modal buscar Estudiante*/
		public function selectEstudianteModal($data)
		{	
			//$sql = "SELECT id,matricula,CONCAT(nombre_estudiante,' ',apellidos_paterno,' ',apellidos_materno) AS nombre_estudiante FROM t_personas_d WHERE CONCAT(nombre_estudiante,' ',apellidos_paterno,' ',
			//		apellidos_materno) LIKE '%$data%'";
			$sql = "SELECT id,mat_externa,mat_interna,CONCAT(nombre_persona,' ',ap_paterno,' ',ap_materno)
					 AS nombre_estudiante FROM v_alumnos_matriculas 
					WHERE CONCAT(nombre_persona,' ',ap_paterno,' ',ap_materno)
					LIKE '%$data%'";
			$request = $this->select_all($sql);
			return $request;

		}
		/*Modal buscar ISBN del Libro*/
		public function selectLibroModal($data)
		{	
			$sql = "SELECT lb.id,lb.nombre_libro,lb.numero_isbn,CONCAT(aut.nombre_autor,' ',aut.apellido_paterno,' ',aut.apellido_materno) AS nombre_autor FROM t_libros AS lb
			INNER JOIN t_autores AS aut ON lb.id_autores = aut.id
			WHERE lb.nombre_libro LIKE '%$data%'";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectAnaqueles(){
			$sql = "SELECT *FROM t_anaquel";
			$request = $this->select_all($sql);
			return $request;
		}
		public function insertAnaqueles($data){
			$mensaje = "ok";
			for ($i = 1; $i<=$data['number']; $i++){
				$sql = "INSERT INTO t_anaquel(nombre_anaquel,numero_charola,id_usuarios)
					VALUES (?,?,?)";
				$request = $this->insert($sql,array($data['name'],$i,1));
				if($i == $data['number']){
					return $mensaje;
				}
			}
		}
	}
?>