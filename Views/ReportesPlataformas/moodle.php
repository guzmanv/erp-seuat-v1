<?php
  headerAdmin($data);
?>
<div id="contentAjax">
</div>
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  <?= $data['page_title'] ?>
              <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-md"></i> Nuevo</button>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="fa fa-home fa-md"></i><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/roles"><?= $data['page_title'] ?></a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="col-12 col-xl-12">
                  <div class="card">
                    <div class="col-md-3">
                        <h4>Plantel:</h4>
                            <select class="custom-select round-0"name="seleccion" id="seleccion" required>
                                <option value="">Seleccionar un Plantel</option>
                                <option value="Tuxtla">Tuxtla Gutierrez</option>
                                <option value="Tapachula">Tapachula</option>
                                <option value="Tapilula">Tapilula</option>
                                <option value="Reforma">Reforma</option>
                                <option value="Yajalon">Yajalon</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Campeche">Campeche</option>
                            </select>
                        <h4>Plataforma:</h4>
                            <select class="custom-select round-0"name="seleccion_plataforma" id="seleccion_plataforma" required>
                                <option value="">Seleccionar una Plataforma</option>
                                <option value="Semestral">Semestral</option>
                                <option value="Cuatrimestral">Cuatrimestral</option>
                                <option value="PrepaAbierta">Prepa Abierta</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <h4>Desde</h4>
                        <input class="form-control" type="datetime-local" id="dateTimeInicial" name="dateTimeInicial" min="2020-06-07T00:00" value="2020-06-07T00:00">
                    </div>
                    <div class="col-md-3">
                        <h4>Hasta</h4>
                        <input class="form-control" type="datetime-local" id="dateTimeFinal" name="dateTimeFinal" min="2020-09-20T00:30" value="2020-09-20T00:30">
                    </div><br>
                    <div class="col-md-12 row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary"><i class="far fa-flag"></i>Consultar Reporte</button>
                        </div>
                        <div class="panel-heading col-md-2">
                            <button type="submit" class="btn btn-success pull-right"><i class="fas fa-download"></i>Descargar Masivo</button>
                        </div>
                    </div><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php footerAdmin($data); ?>