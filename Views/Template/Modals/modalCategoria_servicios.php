<div class="modal fade" id="ModalFormCategoria_servicios" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <small class="text-muted pb-4">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</small>
        <div class="card card-dark">
                <form id="formCategoria_servicios" name="formCategoria_servicios" autocomplete="off">
                    <input type="hidden" id="idCategoria_servicios" name="idCategoria_servicios" value="">
                    <input type="hidden" id="estatus" name="idCategoria_servicios" value="">
                    <input type="hidden" id="fecha_actualizacion" name="txtFecha_actualizacion" value="">
                    <input type="hidden" id="id_usuario_actualizacion" name="txtId_usuario_actualizacion" value="">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="txtNombre_categoria">Nombre categoría <span class="required">*</span></label>
                            <input type="text" id="txtNombre_categoria" name="txtNombre_categoria" class="form-control" placeholder="Ingrese una nueva categoría"  name="Ingresa el nombre de la categoría" required>
                        </div>
                    </div>
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-outline-secondary icono-color-principal btn-inline" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle icono-azul"></i>Cancelar</a>
        <button id="btnActionForm" type="submit" class="btn btn-primary btn-inline"><i class="fa fa-fw fa-lg fa-check-circle icono-azul"></i><span id="btnText"> Guardar</span></button>
      </div>   
      </form> 
    </div>
  </div>
</div>