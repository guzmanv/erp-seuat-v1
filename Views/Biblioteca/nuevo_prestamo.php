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
              <!--<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-md"></i> Nuevo</button>-->
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
                <div class="col-12 col-xl-6">
                  <div class="card">
                    <div class="card-header">
                      <h2>Nuevo Prestamo</h2>
                    </div>
                    <div class="card-body">
                      <form action="setPrestamos" method="POST">
                        <div class="mb-3">
                          <h4>Matricula del Estudiante</h4>
                          <div class="row">
                            <input type="text" class="form-control col-md-8" placeholder="Matricula Interna o Externa" id="matricula" name="matricula" required>
                            <p class="m-2"> Ó </p>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalAlumno"><i class="fa fa-search"></i> Buscar Alumno</button>
                          </div>
                        </div>
                        <div class="mb-3">
                          <h4>ISBN</h4>
                          <div class="row">
                            <input type="text" class="form-control col-md-8" placeholder="ISBN del Libro" id="isbn" name="isbn" required>
                            <p class="m-2"> Ó </p>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalISBN"><i class="fa fa-search"></i> Buscar por Título</button>
                          </div>
                        </div>
                        <div class="mb-3 form-group col-md-5">
                          <div class="form-group">
                            <h4>Fecha Devolución:</h4>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="date" required/>
                              </div>
                          </div>
                        </div>

                        <!-- Modal para buscar Matricula del Alumno-->
                        <div class="modal fade" id="modalAlumno" tabindex="-1" role="dialog" aria-labelledby="modalAlumnoLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAlumnoLabel">Buscar Alumno</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" class="form-control" id="busquedaAlumno" placeholder="Nombre del Alumno" maxlength="100" autocomplete="off" onKeyUp="buscarAlumno();" />
                                        <br>
                                        <table id="tableAlumnos" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Nombre Completo</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal para buscar ISBN-->
                        <div class="modal fade" id="modalISBN" tabindex="-1" role="dialog" aria-labelledby="modalISBNLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalISBNLabel">Buscar Libro</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" class="form-control" id="busquedaISBN" placeholder="Título del Libro" maxlength="100" autocomplete="off" onKeyUp="buscarISBN();" />
                                        <br>
                                        <table id="tableLibros" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Titulo</th>
                                                    <th>Autor</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
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