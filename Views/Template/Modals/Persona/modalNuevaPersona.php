<!-- Modal -->
<div class="modal fade" id="ModalFormNuevaPersona" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModalNuevo">Nueva Persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-secondary">
                    <form id="formPersonaNuevo" name="formPersonaNuevo">
                        <input type="hidden" id="idNuevo" name="idNuevo" value="">
                        <div class="card-body">
                            <div class="row" >
                                    <div class="form-group col-md-4">
                                        <label>Nombre</label>
                                        <input type="text" id="txtNombreNuevo" name="txtNombreNuevo" class="form-control form-control-sm" placeholder="Nombre"  maxlength="45" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Apellido paterno</label>
                                        <input type="text" id="txtApellidoPaNuevo" name="txtApellidoPaNuevo" class="form-control form-control-sm" placeholder="Apellido paterno"  maxlength="70" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Apellido materno</label>
                                        <input type="text" id="txtApellidoMaNuevo" name="txtApellidoMaNuevo" class="form-control form-control-sm" placeholder="Apellido materno"  maxlength="70" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Edad</label>
                                        <input type="text" id="txtEdadNuevo" name="txtEdadNuevo" class="form-control form-control-sm" placeholder="Edad"  maxlength="3" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Sexo</label>
                                        <select class="form-control form-control-sm" id="listSexoNuevo" name="listSexoNuevo" required >
                                        <option value="">Seleccionar</option>
                                        <option value="H">H</option>
                                        <option value="M">M</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Estado civil</label>
                                        <select class="form-control form-control-sm" id="listEstadoCivilNuevo" name="listEstadoCivilNuevo" required >
                                        <option value="">Seleccionar</option>
                                        <option value="Soltero">Soltero(a)</option>
                                        <option value="Casado">Casado(a)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ocupacion</label>
                                        <input type="text" id="txtOcupacionNuevo" name="txtOcupacionNuevo" class="form-control form-control-sm" placeholder="Ocupación"  maxlength="50" required>
                                    </div> 
                                    <div class="form-group col-md-5">
                                        <label>CURP</label>
                                        <input type="text" id="txtCURPNuevo" name="txtCURPNuevo" class="form-control form-control-sm" placeholder="CURP"  maxlength="18" required>
                                    </div> 
                                    <div class="form-group col-md-7">
                                        <label>Escolaridad</label>
                                        <select class="form-control form-control-sm" id="listEscolaridadNuevo" name="listEscolaridadNuevo" required >
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
                                    <!-- <div class="form-group col-md-4">
                                        <label>Categoría persona</label>
                                        <select class="form-control form-control-sm" id="listCategoriaNuevo" name="listCategoriaNuevo" required >
                                        <option value="">Seleccionar</option>
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
                                        <select class="form-control form-control-sm" id="listNivelCarreraInteresNuevo" name="listNivelCarreraInteresNuevo" onchange="nivelCarreraInteresSeleccionadoNew(value)" >
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
                                        <select class="form-control form-control-sm" id="listCarreraInteresNuevo" name="listCarreraInteresNuevo">
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telefono celular</label>
                                        <input type="text" id="txtTelCelNuevo" name="txtTelCelNuevo" class="form-control form-control-sm" placeholder="Telefono celular"  maxlength="10">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telefono fijo</label>
                                        <input type="text" id="txtTelFiNuevo" name="txtTelFiNuevo" class="form-control form-control-sm" placeholder="Telefono fijo"  maxlength="10">
                                    </div>  
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" id="txtEmailNuevo" name="txtEmailNuevo" class="form-control form-control-sm" placeholder="Email"  maxlength="50">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <select class="form-control form-control-sm" id="listEstadoNuevo" name="listEstadoNuevo" onchange="estadoSeleccionado(value)" required >
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
                                        <select class="form-control form-control-sm" id="listMunicipioNuevo" name="listMunicipioNuevo" onchange="municipioSeleccionado(value)" required >
                                            <option value="">Selecciona un Municipio</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Localidad</label>
                                        <select class="form-control form-control-sm" id="listLocalidadNuevo" name="listLocalidadNuevo" required >
                                        <option value="">Selecciona una Localidad</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Colonia</label>
                                        <input type="text" id="txtColoniaNuevo" name="txtColoniaNuevo" class="form-control form-control-sm" placeholder="Colonia" maxlength="45" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>CP</label>
                                        <input type="text" id="txtCPNuevo" name="txtCPNuevo" class="form-control form-control-sm" placeholder="CP"  maxlength="5" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Dirección</label>
                                        <textarea id="txtDireccionNuevo" name="txtDireccionNuevo" class="form-control form-control-sm" placeholder="Dirección"  maxlength="100" row="2" required></textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Estatus</label>
                                        <select class="form-control" id="listEstatusNuevo" name="listEstatusNuevo" required >
                                        <option value="">Selecciona un Estatus</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                        </select>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-outline-secondary icono-color-principal btn-inline" href="#" data-dismiss="modal" id="dimissModalNuevo"><i class="fa fa-fw fa-lg fa-times-circle icono-azul"></i>Cancelar</a>
                    <button id="btnActionFormNuevo" type="submit" class="btn btn-outline-secondary icono-color-principal btn-inline"><i class="fa fa-fw fa-lg fa-check-circle icono-azul"></i><span id="btnText"> Guardar</span></button>
                </div>   
            </form> 
        </div>
    </div>
</div>