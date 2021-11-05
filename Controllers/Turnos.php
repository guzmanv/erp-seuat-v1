<?php

class Turnos extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function turnos()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "Salones";
        $data['page_title'] = "Lista de turnos";
        $data['page_content'] = "";
        //$data['planteles'] = $this->model->selectPlanteles();
        //$data['page_functions_js'] = "functions_inscripciones_admision.js";
        $this->views->getView($this, "turnos", $data);
    }
}
?>