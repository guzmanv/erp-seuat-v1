<?php

class Categoria_serviciosModel extends Mysql
{
    public $intIdCategoria_servicios;
	public $strNombre_categoria;
	public $intEstatus;
	public $strFecha_creacion;
    public $strFecha_actualizacion;
    public $intId_usuario_creacion;
    public $intId_usuario_actualizacion;

	public function __construct()
	{
		parent::__construct();
	}

    public function selectCategoriaServicios()
    {
        //Extraer las categorias de servicios
        $sql = "SELECT * FROM t_categoria_servicios WHERE estatus !=0";
        $request = $this->select_all($sql);
        return $request;
    }
    
    public function insertCategoria_servicios(string $strNombre_categoria, int $intEstatus, string $strFecha_creacion, string $strFecha_actualizacion, int $intId_usuario_creacion, int $intId_usuario_actualizacion){

        $return = "";
        $this->strNombre_categoria = $nombre_categoria;
        $this->intEstatus = $estatus;
        $this->strFecha_creacion = $fecha_creacion;
        $this->strFecha_actualizacion = $fecha_actualizacion;
        $this->intId_usuario_creacion = $id_usuario_creacion;
        $this->intId_usuario_actualizacion = $id_usuario_actualizacion;

        $sql = "SELECT * FROM t_categoria_servicios WHERE nombre_categoria = '{$this->strNombre_categoria}' ";
        $request = $this->select_all($sql);

        if(empty($request))
        {
            $query_insert  = "INSERT INTO t_categoria_servicios(nombre_categoria,estatus,fecha_creacion,fecha_actualizacion,id_usuario_creacion,intId_usuario_actualizacion) VALUES(?,?,?,?,?,?)";
            $arrData = array($this->strNombre_categoria, $this->intEstatus, $this->strFecha_creacion, $this->strFecha_actualizacion, $this->intId_usuario_creacion, $this->intId_usuario_actualizacion );
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "exist";
        }
        return $return;
    }	
    
}
?>