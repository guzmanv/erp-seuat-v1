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
              <div class="card-body row">


                <div class="col-lg-3 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col mt-0">
                          <h5 class="card-title">Libros</h5>
                        </div>
                        <div class="col-auto">
                          <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-light">
                              <i class="ion-ios-book" style="zoom:2.0;"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3">132</h1>
                      <div class="mb-0">
                        <!--<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
                        <span class="text-muted">Titulos Existentes</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col mt-0">
                          <h5 class="card-title">Prestamos</h5>
                        </div>
                        <div class="col-auto">
                          <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-light">
                              <i class="ion ion-heart" style="zoom:2.0;"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3">10</h1>
                      <div class="mb-0">
                        <!--<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
                        <span class="text-muted">Libros Prestados</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col mt-0">
                          <h5 class="card-title">Devoluciones</h5>
                        </div>
                        <div class="col-auto">
                          <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-light">
                              <i class="ion ion-ios-undo" style="zoom:2.0;"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3">23</h1>
                      <div class="mb-0">
                        <!--<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
                        <span class="text-muted">Títulos Devueltos</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col mt-0">
                          <h5 class="card-title">Usuarios</h5>
                        </div>
                        <div class="col-auto">
                          <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-light">
                              <i class="ion ion-person" style="zoom:2.0;"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3">421</h1>
                      <div class="mb-0">
                        <!--<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
                        <span class="text-muted">Total Usuarios</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col mt-0">
                          <h5 class="card-title">Autores</h5>
                        </div>
                        <div class="col-auto">
                          <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-light">
                              <i class="ion ion-person-stalker" style="zoom:2.0;"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3">132</h1>
                      <div class="mb-0">
                        <!--<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
                        <span class="text-muted">Total Autores</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col mt-0">
                          <h5 class="card-title">Categorías</h5>
                        </div>
                        <div class="col-auto">
                          <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-light">
                              <i class="ion ion-pie-graph" style="zoom:2.0;"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3">132</h1>
                      <div class="mb-0">
                        <!--<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>-->
                        <span class="text-muted">Total Categorías</span>
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