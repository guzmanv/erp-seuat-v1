<!-- Modal -->
<div class="modal fade" id="ModalFormEditPersona" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header headerUpdated">
                <h5 class="modal-title" id="titleModalEdit">Editar Persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-secondary">
                    <form id="formPersonaEdit" name="formPersonaEdit">
                        <input type="hidden" id="idEdit" name="idEdit" value="">
                        <div class="card-body">
                            <div class="row" >
                                    <div class="form-group col-md-4">
                                        <label>Nombre</label>
                                        <input type="text" id="txtNombreEdit" name="txtNombreEdit" class="form-control form-control-sm" placeholder="Nombre"  maxlength="45" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Apellido paterno</label>
                                        <input type="text" id="txtApellidoPaEdit" name="txtApellidoPaEdit" class="form-control form-control-sm" placeholder="Apellido Paterno"  maxlength="70" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Apellido materno</label>
                                        <input type="text" id="txtApellidoMaEdit" name="txtApellidoMaEdit" class="form-control form-control-sm" placeholder="Apellido Materno"  maxlength="70" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Edad</label>
                                        <input type="text" id="txtEdadEdit" name="txtEdadEdit" class="form-control form-control-sm" placeholder="Edad"  maxlength="3" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Sexo</label>
                                        <select class="form-control form-control-sm" id="listSexoEdit" name="listSexoEdit" required >
                                        <option value="">Selecciona un Sexo</option>
                                        <option value="H">H</option>
                                        <option value="M">M</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Estado civil</label>
                                        <select class="form-control form-control-sm" id="listEstadoCivilEdit" name="listEstadoCivilEdit" required >
                                        <option value="">Selecciona un Estado</option>
                                        <option value="Soltero">Soltero(a)</option>
                                        <option value="Casado">Casado(a)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ocupacion</label>
                                        <input type="text" id="txtOcupacionEdit" name="txtOcupacionEdit" class="form-control form-control-sm" placeholder="Ocupacion"  maxlength="50" required>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>CURP</label>
                                        <input type="text" id="txtCURPEdit" name="txtCURPEdit" class="form-control form-control-sm" placeholder="CURP"  maxlength="18" required>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label>Escolaridad</label>
                                        <select class="form-control form-control-sm" id="listEscolaridadEdit" name="listEscolaridadEdit" required >
                                            <option value="">Selecciona una Escolaridad</option>
                                            <?php 
                                                foreach ($data['grados_estudios'] as $value) {
                                                    ?>
                                                        <option value="<?php echo $value['id'] ?>" ><?php echo $value['nombre_escolaridad'] ?></option>                
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group col-md-4">
                                        <label>Categoria persona</label>
                                        <select class="form-control form-control-sm" id="listCategoriaEdit" name="listCategoriaEdit" required >
                                        <option value="">Selecciona una Categoría</option>
                                        <?php 
                                            foreach ($data['categoria_persona'] as $value) {
                                                ?>
                                                    <option value="<?php echo $value['id'] ?>"><?php echo $value['nombre_categoria'] ?></option>
                                                <?php
                                            }
                                        ?>
                                        </select>
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <label>Nivel carrera interés</label>
                                        <select class="form-control form-control-sm" id="listNivelCarreraInteresEdit" name="listNivelCarreraInteresEdit" onchange="nivelCarreraInteresSeleccionadoEdit(value)" required >
                                            <option value="">Seleccionar</option>
                                            <?php 
                                                foreach ($data['grados_estudios'] as $value) {
                                                    ?>
                                                        <option value="<?php echo $value['id'] ?>" ><?php echo $value['nombre_escolaridad'] ?></option>                
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Carrera interés</label>
                                        <select class="form-control form-control-sm" id="listCarreraInteresEdit" name="listCarreraInteresEdit" required >
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telefono celular</label>
                                        <input type="text" id="txtTelCelEdit" name="txtTelCelEdit" class="form-control form-control-sm" placeholder="Telefono Celular"  maxlength="10" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telefono fijo</label>
                                        <input type="text" id="txtTelFiEdit" name="txtTelFiEdit" class="form-control form-control-sm" placeholder="Telefono Fijo"  maxlength="10" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" id="txtEmailEdit" name="txtEmailEdit" class="form-control form-control-sm" placeholder="Email"  maxlength="50" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <select class="form-control form-control-sm" id="listEstadoEdit" name="listEstadoEdit" onchange="estadoSeleccionadoEdit(value)" required >
                                            <option value="">Selecciona un Estado</option>
                                            <?php 
                                                foreach ($data['estados'] as $value) {
                                                    ?>
                                                        <option value="<?php echo $value['id'] ?>" ><?php echo $value['nombre'] ?></option>                
                                                    <?php
                                                }    
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Municipio</label>
                                        <select class="form-control form-control-sm" id="listMunicipioEdit" name="listMunicipioEdit" onchange="municipioSeleccionadoEdit(value)" required >
                                            <option value="">Selecciona un Municipio</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Localidad</label>
                                        <select class="form-control form-control-sm" id="listLocalidadEdit" name="listLocalidadEdit" required >
                                        <option value="">Selecciona una Localidad</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Colonia</label>
                                        <input type="text" id="txtColoniaEdit" name="txtColoniaEdit" class="form-control form-control-sm" placeholder="Colonia"  maxlength="45" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>CP</label>
                                        <input type="text" id="txtCPEdit" name="txtCPEdit" class="form-control form-control-sm" placeholder="CP" maxlength="5" required>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Direccion</label>
                                        <textarea  id="txtDireccionEdit" name="txtDireccionEdit" class="form-control form-control-sm" placeholder="Direccion"  maxlength="100" required></textarea>
                                    </div>
<!--                                     <div class="form-group">
                                        <label>Validacion</label>
                                        <input type="text" id="txtValidacionEdit" name="txtValidacionEdit" class="form-control" placeholder="Validacion"  name="" required>
                                    </div>  --> 
                                    <div class="form-group col-md-4">
                                        <label>Estatus</label>
                                        <select class="form-control form-control-sm" id="listEstatusEdit" name="listEstatusEdit" required >
                                        <option value="">Selecciona</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-outline-secondary icono-color-principal btn-inline" href="#" data-dismiss="modal" id="dimissModalEdit"><i class="fa fa-fw fa-lg fa-times-circle icono-azul"></i>Cancelar</a>
                    <button id="btnActionFormEdit" type="submit" class="btn btn-outline-secondary icono-color-principal btn-inline"><i class="fa fa-fw fa-lg fa-check-circle icono-azul"></i><span id="btnText"> Guardar</span></button>
                </div>   
            </form> 
        </div>
    </div>
</div>