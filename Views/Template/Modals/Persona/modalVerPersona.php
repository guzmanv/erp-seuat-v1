<!-- Modal -->
<div class="modal fade" id="ModalFormVerPersona" data-backdrop="static" data-keyboard="true" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModalVer">Ver Persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-secondary">
                    <form id="formPersonaVer" name="formPersonaVer">
                        <input type="hidden" id="idVer" name="idVer" value="">
                        <div class="card-body">
                            <div class="row" >
                                    <div class="form-group col-md-4">
                                        <label>Nombre</label>
                                        <input type="text" id="txtNombreVer" name="txtNombreVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Apellido Paterno</label>
                                        <input type="text" id="txtApellidoPaVer" name="txtApellidoPaVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Apellido Materno</label>
                                        <input type="text" id="txtApellidoMaVer" name="txtApellidoMaVer" class="form-control form-control-sm" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Edad</label>
                                        <input type="text" id="txtEdadVer" name="txtEdadVer" class="form-control form-control-sm" disabled>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Sexo</label>
                                        <select class="form-control form-control-sm" id="listSexoVer" name="listSexoVer" disabled >
                                        <option value="">Selecciona un Sexo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Estado Civil</label>
                                        <select class="form-control form-control-sm" id="listEstadoCivilVer" name="listEstadoCivilVer" disabled >
                                        <option value="">Selecciona un Estado</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ocupacion</label>
                                        <input type="text" id="txtOcupacionVer" name="txtOcupacionVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>CURP</label>
                                        <input type="text" id="txtCURPVer" name="txtCURPVer" class="form-control form-control-sm" disabled>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label>Escolaridad</label>
                                        <select class="form-control form-control-sm" id="listEscolaridadVer" name="listEscolaridadVer" disabled >
                                            <option value="">Selecciona una Escolaridad</option>
                                        </select>
                                    </div>
<!--                                     <div class="form-group col-md-4">
                                        <label>Categoria Persona</label>
                                        <select class="form-control" id="listCategoriaVer" name="listCategoriaVer" disabled >
                                        <option value="">Selecciona una Categoría</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <label>Nivel carrera interés</label>
                                        <select class="form-control form-control-sm" id="listNivelCarreraInteresVer" name="listNivelCarreraInteresVer" disabled >
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Carrera interés</label>
                                        <select class="form-control form-control-sm" id="listCarreraInteresVer" name="listCarreraInteresVer" disabled >
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telefono Celular</label>
                                        <input type="text" id="txtTelCelVer" name="txtTelCelVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Telefono Fijo</label>
                                        <input type="text" id="txtTelFiVer" name="txtTelFiVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" id="txtEmailVer" name="txtEmailVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <select class="form-control form-control-sm" id="listEstadoVer" name="listEstadoVer" onchange="estadoSeleccionadoEdit(value)" disabled >
                                            <option value="">Selecciona un Estado</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Municipio</label>
                                        <select class="form-control form-control-sm" id="listMunicipioVer" name="listMunicipioVer" onchange="municipioSeleccionadoEdit(value)" disabled >
                                            <option value="">Selecciona un Municipio</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Localidad</label>
                                        <select class="form-control form-control-sm" id="listLocalidadVer" name="listLocalidadVer" disabled >
                                        <option value="">Selecciona una Localidad</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Colonia</label>
                                        <input type="text" id="txtColoniaVer" name="txtColoniaVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>CP</label>
                                        <input type="text" id="txtCPVer" name="txtCPVer" class="form-control form-control-sm"  disabled>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Direccion</label>
                                        <input type="text" id="txtDireccionVer" name="txtDireccionVer" class="form-control form-control-sm"  disabled>
                                    </div>
<!--                                     <div class="form-group">
                                        <label>Validacion</label>
                                        <input type="text" id="txtValidacionVer" name="txtValidacionVer" class="form-control" placeholder="Validacion"  name="" disabled>
                                    </div>   -->
                                    <div class="form-group col-md-4">
                                        <label>Estatus</label>
                                        <select class="form-control form-control-sm" id="listEstatusVer" name="listEstatusVer" disabled >
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-outline-secondary icono-color-principal btn-inline" href="#" data-dismiss="modal" id="dimissModalVer"><i class="fa fa-fw fa-lg fa-times-circle icono-azul"></i>Cancelar</a>
                    <button id="btnActionFormVer" type="submit" class="btn btn-outline-secondary icono-color-principal btn-inline"><i class="fa fa-fw fa-lg fa-check-circle icono-azul"></i><span id="btnText"> Guardar</span></button>
                </div>   
            </form> 
        </div>
    </div>
</div>