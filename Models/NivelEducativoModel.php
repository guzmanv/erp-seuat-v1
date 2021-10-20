<?php
    class NivelEducativoModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }
        public function selectNivelesEducativos(){
            $sql = "SELECT *FROM t_nivel_educativos WHERE estatus !=0 ORDER BY id DESC";
            $request = $this->select_all($sql);
            return $request;
        }
        public function insertNivelEducativo($data){
            $nombreNivelEducativo = $data['txtNombreNuevo'];
            $abreviatura = $data['txtAbreviaturaNuevo'];
            $orden = $data['txtOrdenNuevo'];
            $request;
            if($orden == null){
                $orden = null;
            }
            $sqlExist = "SELECT *FROM t_nivel_educativos WHERE nombre_nivel_educativo = '$nombreNivelEducativo' OR abreviatura = '$abreviatura'";
            $requestExist = $this->select($sqlExist);
            if($requestExist){
                $request['estatus'] = TRUE;
            }else{
                $sqlNew = "INSERT INTO t_nivel_educativos(nombre_nivel_educativo,abreviatura,orden,estatus,fecha_creacion,fecha_actualizacion,id_usuario_creacion,id_usuario_actualizacion) 
                    VALUES (?,?,?,?,NOW(),NOW(),?,?);";
                $requestNew = $this->insert($sqlNew,array($nombreNivelEducativo,$abreviatura,$orden,1,1,1));
                $request['estatus'] = FALSE;
            }
            return $request;
        }

        public function selectNivelEducativo(int $idNivelEducativo){
            $sql = "SELECT *FROM t_nivel_educativos WHERE id = $idNivelEducativo LIMIT 1";
            $request = $this->select($sql);
            return $request;
        }

        public function updateNivelEducativo(int $intIdNivelEducativoEdit,$data){
            $idNivelEducativo = $intIdNivelEducativoEdit;
            $nombreNivelEducativo = $data['txtNombreEdit'];
            $abreviatura = $data['txtAbreviaturaEdit'];
            $orden = $data['txtOrdenEdit'];
            $estatus = $data['listEstatusEdit'];
            if($orden == null){
                $orden = null;
            }
            $request;
            $sqlExist = "SELECT *FROM t_nivel_educativos WHERE nombre_nivel_educativo = '$nombreNivelEducativo' AND id != $idNivelEducativo";
            $requestExist = $this->select($sqlExist);
            if($requestExist){
                $request['estatus'] = TRUE;
            }else{
                $request['estatus'] = FALSE;
            }


            //$sql = "UPDATE t_nivel_educativos SET nombre_nivel_educativo = ?, abreviatura = ?, orden = ?,estatus = ?, fecha_actualizacion = NOW(),id_usuario_creacion = ?,id_usuario_actualizacion = ? WHERE id = $idNivelEducativo";
            //$request = $this->update($sql,array($nombreNivelEducativo,$abreviatura,$orden,$estatus,1,1));
            return $request;
        }

        public function deleteNivelEducativo(int $intIdNivelEductaivo){
            $sql = "SELECT * FROM t_nivel_educativos WHERE id = $intIdNivelEductaivo";
			$request = $this->select_all($sql);
			if($request){
				$sql = "UPDATE t_nivel_educativos SET estatus = ? WHERE id = $intIdNivelEductaivo";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request){
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}
			return $request;
        }
        
    }
?>