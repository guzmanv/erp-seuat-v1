<?php
class Salon extends Controllers{

    public function __construct()
    {
        parent::__construct();
    }

    public function salon()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "Salones";
        $data['page_title'] = "Lista de salones";
        $data['page_content'] = "";
        $data['periodo'] = $this->model->selectPeriodo();
        $data['grado'] = $this->model->selectGrado();
        $data['grupo'] = $this->model->selectGrupo();
        //$data['planteles'] = $this->model->selectPlanteles();
        //$data['page_functions_js'] = "functions_inscripciones_admision.js";
        $this->views->getView($this, "salon", $data);
    }
}
?>