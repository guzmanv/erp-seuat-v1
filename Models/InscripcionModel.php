<?php
    class InscripcionModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }
        /* public function selectInscripcionesAdmision(){
            $sql = "SELECT ins.id,CONCAT(nombre_persona,' ',ap_paterno,' ',ap_materno) AS nombre_completo,plant.nombre_plantel,plant.municipio,plan.nombre_carrera,sal.nombre_salon,gra.numero_natural,grup.nombre_grupo,per.validacion FROM t_inscripciones AS ins
            INNER JOIN t_personas AS per ON ins.id_personas = per.id
            INNER JOIN t_plan_estudios AS plan ON ins.id_plan_estudios = plan.id
            INNER JOIN t_salones AS sal ON ins.id_salon = sal.id
            INNER JOIN t_grados AS gra ON sal.id_grado = gra.id
            INNER JOIN t_grupos AS grup ON sal.id_grupo = grup.id
            INNER JOIN t_planteles AS plant ON plan.id_planteles = plant.id";
            $request = $this->select_all($sql);
            return $request;
        } */
        public function selectInscripcionesAdmision(){
            $sql = "SELECT plan.id,plan.nombre_carrera,gra.numero_natural,grup.nombre_grupo, COUNT(*) AS total FROM t_inscripciones AS ins
            INNER JOIN t_personas AS per ON ins.id_personas = per.id
            INNER JOIN t_plan_estudios AS plan ON ins.id_plan_estudios = plan.id
            INNER JOIN t_salones AS sal ON ins.id_salon = sal.id
            INNER JOIN t_grados AS gra ON sal.id_grado = gra.id
            INNER JOIN t_grupos AS grup ON sal.id_grupo = grup.id
            INNER JOIN t_planteles AS plant ON plan.id_planteles = plant.id
            GROUP BY plan.nombre_carrera HAVING COUNT(*)>=1";
            $request = $this->select_all($sql);
            return $request;
        }
        public function selectPersona($id){
            $sql = "SELECT *FROM t_personas WHERE id = $id";
            $request = $this->select($sql);
            return $request;
        }
        public function selectPersonasModal($data){
            $sql = "SELECT id,CONCAT(nombre_persona,' ',ap_paterno,' ',ap_materno) AS nombre FROM t_personas
            WHERE CONCAT(nombre_persona,' ',ap_paterno,' ',ap_materno) LIKE '%$data%'";
            $request = $this->select_all($sql);
            return $request;
        }

        public function insertInscripcion($data){
            $idPersona = $data['idPersonaSeleccionada'];
            $idPlantel = $data['listPlantelNuevo'];
            $idCarrera = $data['listCarreraNuevo'];
            $nombreTutor = $data['txtNombreTutorAgregar'];
            $appPatTutor = $data['txtAppPaternoTutorAgregar'];
            $appMatTutor = $data['txtAppMaternoTutorAgregar'];
            $direccion = "";
            $telCelularTutor = $data['txtTelCelularTutorAgregar'];
            $telFijoTutor = $data['txtTelFijoTutorAgregar'];
            $emailTutor = $data['txtEmailTutorAgregar'];
 
            $sql = "INSERT INTO t_tutores(nombre_tutor,appat_tutor,apmat_tutor,direccion,tel_celular,tel_fijo,email) VALUES(?,?,?,?,?,?,?)";
            $request = $this->insert($sql,array($nombreTutor,$appPatTutor,$appMatTutor,$direccion,$telCelularTutor,$telFijoTutor,$emailTutor));
            if($request){
                $sql_documentos = "SELECT doc.id FROM t_plan_estudios AS plan
                INNER JOIN t_nivel_educativos AS niv ON plan.id_nivel_educativo = niv.id 
                INNER JOIN t_documentos AS doc ON doc.id_nivel_educativo = niv.id WHERE plan.id = $idCarrera LIMIT 1";
                $request_documentos = $this->select($sql_documentos);
                if($request_documentos){
                    $idDocumentos = $request_documentos['id'];
                    $sql_inscripcion = "INSERT INTO t_inscripciones(folio_impreso,folio_sistema,tipo_ingreso,grado,hora_entrada,hora_salida,id_plan_estudios,id_personas,id_tutores,id_documentos,id_salon,id_campania,id_usuario_creacion,fecha_actualizacion,id_usuario_actualizacion) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),?)";
                    $request_inscripcion = $this->insert($sql_inscripcion,array('F1252','F1250','a',1,1,1,$idCarrera,$idPersona,$idPersona,$idDocumentos,null,null,1,1));
                    if($request_inscripcion){
                        $idInscripcion = $request_inscripcion;
                       $sql_historial = "INSERT INTO t_historiales(aperturado,inscrito,egreso,pasante,titulado,baja,matricula_interna,matricula_externa,fecha_inscrito,fecha_egreso,fecha_pasante,fecha_titulado,fecha_baja,id_inscripcion) VALUES(?,?,?,?,?,?,?,?,NOW(),NOW(),NOW(),NOW(),NOW(),?)";
                        $request_historial = $this->insert($sql_historial,array(0,1,0,0,0,0,'SDSD','012345',$idInscripcion));
                    }
                }
            }
            return $request_historial;
        }
        public function selectPlanteles(){
            $sql = "SELECT *FROM t_planteles";
            $request = $this->select_all($sql);
            return $request;
        }

        public function selectCarreras($data){
            $idPlantel = $data;
            $sql = "SELECT *FROM t_plan_estudios WHERE id_planteles = $idPlantel AND estatus !=0";
            $request = $this->select_all($sql);
            return $request;
        }

        public function selectDocumentacion($idAlumno){
            $idAlumno = $idAlumno;
            $sql = "SELECT insc.id_personas,insc.id_documentos,det.tipo_documento FROM t_inscripciones AS insc
            INNER JOIN t_documentos AS doc ON insc.id_documentos = doc.id
            INNER JOIN t_detalle_documentos AS det ON det.id_documentos = doc.id
            WHERE insc.id = $idAlumno";
            $request = $this->select_all($sql);
            return $request;
        }
        public function selectInscripcion(int $idInscripcion){
            $sql = "SELECT per.nombre_persona,per.ap_paterno,per.ap_materno,plnt.id AS id_plantel,ins.id_plan_estudios,plan.nombre_carrera FROM t_inscripciones AS ins
            INNER JOIN t_personas AS per ON ins.id_personas = per.id
            INNER JOIN t_plan_estudios AS plan ON ins.id_plan_estudios = plan.id
            INNER JOIN t_planteles AS plnt ON plan.id_planteles = plnt.id
            WHERE ins.id = $idInscripcion";
            $request = $this->select_all($sql);
            return $request;
        }

        //Lista de Inscritos en una Carrera
        public function selectInscritos(int $idCarrera){
            $sql = "SELECT ins.id,per.nombre_persona,CONCAT(per.ap_paterno,' ',per.ap_materno) AS apellidos FROM t_inscripciones AS ins
            INNER JOIN t_personas AS per ON ins.id_personas = per.id
            WHERE ins.id_plan_estudios = $idCarrera";
            $request = $this->select_all($sql);
            return $request;
        }
    }
?>