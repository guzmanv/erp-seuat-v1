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
                <div class="col-12 col-xl-6">
                  <div class="card">
                    <div class="card-header">
                      <h2>Nuevo Prestamo</h2>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <h4>Matricula del Estudiante</h4>
                          <div class="row">
                            <input type="text" class="form-control col-md-8" placeholder="Matricula Interna o Externa">
                            <p class="m-2"> Ó </p>
                            <button class="btn btn-warning btnBuscarAlumno"><i class="fa fa-search"></i> Buscar Alumno</button>
                          </div>
                        </div>
                        <div class="mb-3">
                          <h4>ISBN</h4>
                          <div class="row">
                            <input type="text" class="form-control col-md-8" placeholder="ISBN del Libro">
                            <p class="m-2"> Ó </p>
                            <button class="btn btn-warning"><i class="fa fa-search"></i> Buscar por Título</button>
                          </div>
                        </div>
                        <div class="mb-3 form-group col-md-5">
                          <div class="form-group">
                            <h4>Fecha Devolución:</h4>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              </div>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <div class="col-sm-12 ms-sm-auto">
                            <button type="submit" class="btn btn-primary float-right pl-4 pr-4">Agregar</button>
                          </div>
                        </div>
                      </form>
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