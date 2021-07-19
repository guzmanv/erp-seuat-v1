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
              <!--<a href="NuevaCategoria"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-md"></i> Nuevo</button></a>-->
            </h1>
          </div>
          
          <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="fa fa-home fa-md"></i><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/roles"><?= $data['page_title'] ?></a></li>
            </ol>
          </div>
          -->
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
                      <h2>Categoria</h2>
                    </div>
                    <div class="card-body">
                      <form action = "setCategoria" method="POST">
                        <div class="mb-3">
                          <h4>Nombre de la Categoría</h4>
                          <div>
                            <input type="text" class="form-control" placeholder="Nombre de la categoría" name="nombre_categoria" required title="hola">
                          </div>
                          <!--
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i class="fab fa-accessible-icon"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre de la Categoria" name="nombre_categoria" required>
                          </div>
                          -->
                        </div>
                        <div class="mb-3 row"></div>
                        <div class="mb-3 row"></div>
                        <div class="mb-3">
                          <h4>Status</h4>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="radio1" value="activo" checked>
                            <label class="form-check-label" for="radio1">Activo</label>
                          </div>
                          
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="radio2" value="innactivo">
                            <label class="form-check-label" for="radio2">Innactivo</label>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <div class="col-sm-12 ms-sm-auto">
                            <button type="submit" class="btn btn-primary float-right pl-4 pr-4">Crear</button>
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