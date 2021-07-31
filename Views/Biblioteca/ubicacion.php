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
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAnaquel"><i class="fa fa-plus-circle fa-md"></i> Nuevo</button>
            </h1>
          </div>
          <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="fa fa-home fa-md"></i><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/roles"><?= $data['page_title'] ?></a></li>
            </ol>
          </div>-->
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="col-8 col-xl-8">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title">Lista de Anaqueles</h3>
                      <p class="card-text">
                      <table id="tableRoles" class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre Anaquel</th>
                            <th>Numero de Charola</th>
                            <th>Abreviatura</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                      </p>

                      <!-- Modal para buscar Matricula del Alumno-->
                        <div class="modal fade" id="modalAnaquel" tabindex="-1" role="dialog" aria-labelledby="modalAnaquelLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAnaquelLabel">Agregar Anaquel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" class="form-control" id="nombreAnaquel" placeholder="Nombre del Anaquel" maxlength="100" autocomplete="off"/>
                                        <br>
                                        <input type="text" class="form-control" id="numeroCharolas" placeholder="Numero de Charolas" maxlength="100" autocomplete="off"/>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="agregarAnaquel()">Agregar</button>
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
        </div>
      </div>
    </div>
  </div>
</div>
<?php footerAdmin($data); ?>