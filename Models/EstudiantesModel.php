<?php
	class EstudiantesModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}
		//Funcion para consultar lista de Estudiantes
		public function selectEstudiantes(){
			$sql = "SELECT ins.id,per.nombre_persona,CONCAT(per.ap_paterno,' ',per.ap_materno) AS apellidos,
            plante.nombre_plantel,plante.municipio,planest.nombre_carrera,ins.grado,sal.nombre_salon,per.validacion FROM t_inscripciones AS ins
            LEFT JOIN t_historiales AS his ON ins.id_historial = his.id
            INNER JOIN t_personas AS per ON ins.id_personas = per.id
            INNER JOIN t_plan_estudios AS planest ON ins.id_plan_estudios = planest.id
            INNER JOIN t_planteles AS plante ON planest.id_planteles = plante.id
            LEFT JOIN t_salones AS sal ON ins.id_salon = sal.id
            WHERE his.inscrito = 1";
			$request = $this->select_all($sql);
			return $request;
		}
	}
?>