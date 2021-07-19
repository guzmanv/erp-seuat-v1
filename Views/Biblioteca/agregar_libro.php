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
                      <h2>Agregar Libro</h2>
                    </div>
                    <div class="card-body">
                      <form action="setLibros" method="POST">
                        <div class="mb-3">
                          <h4>Título del Libro</h4>
                          <div>
                            <input type="text" class="form-control" placeholder="Nombre del Libro" name="titulo_libro">
                          </div>
                        </div>
                        <div class="mb-3">
                          <h4>Subtitulo del Libro</h4>
                          <div>
                            <input type="text" class="form-control" placeholder="Subtitulo del Libro" name="subtitulo_libro">
                          </div>
                        </div>
                        <div class="mb-3">
                            <h4>Categoria</h4>
                            <div class="input-group">
                              <select class="custom-select" id="inputGroupSelect04" name="nombre_categoria">
                                <option selected>Selecciona una Categoria</option>
                                <?php  
                                  foreach($data['categorias'] as $categoria){
                                    ?>
                                      <option value="<?php echo $categoria['id'] ?>"><?php echo($categoria['nombre_categoria_libro']); ?></option>
                                    <?php
                                  }      

                                ?>
                              </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Autor</h4>
                            <div class="input-group">
                              <select class="custom-select" id="inputGroupSelect04" name="nombre_autor">
                                <option selected>Nombre del Autor</option>
                                <?php  
                                  foreach($data['autor'] as $autor){
                                    ?>
                                      <option value="<?php echo $autor['id'] ?>"><?php echo($autor['nombre_autor'].' '.$autor['apellido_paterno'].' '.$autor['apellido_materno'] ); ?></option>
                                    <?php
                                  }      

                                ?>
                              </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Numero de ISBN</h4>
                            <div>
                                <input type="text" class="form-control" placeholder="Numero de ISBN" name="isbn">
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Ubicacion</h4>
                            <div>
                              <select class="custom-select" id="inputGroupSelect04" name="ubicacion">
                                <option selected>Ubicacion en los Anaqueles</option>
                                <?php  
                                  foreach($data['autor'] as $autor){
                                    ?>
                                      <option value="<?php echo $autor['id'] ?>"><?php echo($autor['nombre_autor'].' '.$autor['apellido_paterno'].' '.$autor['apellido_materno'] ); ?></option>
                                    <?php
                                  }      

                                ?>
                              </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>DDC</h4>
                            <div>
                                <input type="text" class="form-control" placeholder="Clasificacion Decimal Dewey" name="dcc">
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Clasificacion Interna</h4>
                            <div>
                                <input type="text" class="form-control" placeholder="Clasificacion Interna" name="clasificacion_interna">
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Cantidad</h4>
                            <div>
                                <input type="text" class="form-control" placeholder="Cantidad" name="ct">
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