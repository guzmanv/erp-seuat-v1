<?php
class SalonModel extends Mysql{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function selectPeriodo()
    {
        $sql = "SELECT * FROM t_periodos";
        $request = $this->select_all($sql);
        return $request;
    }

    public function selectGrado()
    {
        $sql = "SELECT * FROM t_grados";
        $request = $this->select_all($sql);
        return $request;
    }

    public function selectGrupo()
    {
        $sql = "SELECT * FROM t_grupos";
        $request = $this->select_all($sql);
        return $request;
    }
}
?>