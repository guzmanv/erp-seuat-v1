var tablePersonas;
var formPersonaNueva =  document.querySelector("#formPersonaNuevo");
document.addEventListener('DOMContentLoaded', function(){
	tablePersonas = $('#tablePersonas').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Persona/getPersonas",
            "dataSrc":""
        },
        "columns":[
            {"data":"numeracion"},
            {"data":"nombre_persona"},
			{"data":"apellidos"},
            {"data":"email"},
            {"data":"tel_celular"},
            {"data":"direccion"},
            {"data":"nombre_categoria"},
            {"data":"options"}
        ],
        "responsive": true,
	    "paging": true,
	    "lengthChange": true,
	    "searching": true,
	    "ordering": true,
	    "info": true,
	    "autoWidth": false,
	    "scrollY": '42vh',
	    "scrollCollapse": true,
	    "bDestroy": true,
	    "order": [[ 0, "asc" ]],
	    "iDisplayLength": 25
    });
});
$('#tablePersonas').DataTable();


formPersonaNueva.onsubmit = function(e){
    e.preventDefault();
    document.querySelector("#idNuevo").value = 1;

    var strNombre = document.querySelector('#txtNombreNuevo').value;
    var strAppPaterno = document.querySelector('#txtApellidoPaNuevo').value;
    var strAppMaterno = document.querySelector('#txtApellidoMaNuevo').value;
    var strEdad = document.querySelector('#txtEdadNuevo').value;
    var strSexo = document.querySelector('#listSexoNuevo').value;
    var strEdoCivil = document.querySelector('#listEstadoCivilNuevo').value;
    var strOcupacion = document.querySelector('#txtOcupacionNuevo').value;
    var strCURP = document.querySelector('#txtCURPNuevo').value;
    var intEscolaridad = document.querySelector('#listEscolaridadNuevo').value;
    //var intCatPersona = document.querySelector('#listCategoriaNuevo').value;
    //var intNivelCarreraInteres = document.querySelector('#listNivelCarreraInteresNuevo').value;
    //var intCarreraInteres = document.querySelector('#listCarreraInteresNuevo').value;
    //var intTelCelular = document.querySelector('#txtTelCelNuevo').value;
    //var intTelFijo = document.querySelector('#txtTelFiNuevo').value;
    //var strEmail = document.querySelector('#txtEmailNuevo').value;
    var intEstado = document.querySelector('#listEstadoNuevo').value;
    var intMunicipio = document.querySelector('#listMunicipioNuevo').value;
    var intLocalidad = document.querySelector('#listLocalidadNuevo').value;
    var strColonia = document.querySelector('#txtColoniaNuevo').value;
    var strDireccion = document.querySelector('#txtDireccionNuevo').value;
    var intCP = document.querySelector('#txtCPNuevo').value;

    if (strNombre == '' || strAppPaterno == '' || strAppMaterno == '' || strEdad == '' || strSexo == '' || strEdoCivil == '' || strOcupacion == '' || strCURP == '' ||
    intEscolaridad == '' || intEstado == '' || intMunicipio == '' || intLocalidad == '' ||
    strColonia == '' || strDireccion == '' || intCP == '')
    {
        swal.fire("Atención", "Atención todos los campos son obligatorios", "warning");
        return false;
    }
  
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/Persona/setPersona';
    var formData = new FormData(formPersonaNueva);
    request.open("POST",ajaxUrl,true);
    request.send(formData);
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            if(objData.estatus){
                formPersonaNueva.reset();
                swal.fire("Persona",objData.msg,"success").then((result) =>{
                    $('#dimissModalNuevo').click();
                });
                tablePersonas.api().ajax.reload();
            }else{
                swal.fire("Error",objData.msg,"error");
            }
        }
    }
}

function estadoSeleccionado(value){
    const selMunicipio = document.querySelector('#listMunicipioNuevo');
    let url = base_url+"/Persona/getMunicipios?idestado="+value;
    fetch(url)
    .then(res => res.json())
    .then((resultado) => {
        selMunicipio.innerHTML = "";
        for (let i = 0; i < resultado.length; i++) {
            opcion = document.createElement('option');
            opcion.text = resultado[i]['nombre'];
            opcion.value = resultado[i]['id'];
            selMunicipio.appendChild(opcion);
            
        }
    })
    .catch(err =>{throw err});
}

function estadoSeleccionado(value){
    const selMunicipio = document.querySelector('#listMunicipioNuevo');
    let url = base_url+"/Persona/getMunicipios?idestado="+value;
    fetch(url)
    .then(res => res.json())
    .then((resultado) => {
        selMunicipio.innerHTML = "";
        for (let i = 0; i < resultado.length; i++) {
            opcion = document.createElement('option');
            opcion.text = resultado[i]['nombre'];
            opcion.value = resultado[i]['id'];
            selMunicipio.appendChild(opcion);
            
        }
    })
    .catch(err =>{throw err});
}

function estadoSeleccionadoEdit(value){
    const selMunicipio = document.querySelector('#listMunicipioEdit');
    let url = base_url+"/Persona/getMunicipios?idestado="+value;
    fetch(url)
    .then(res => res.json())
    .then((resultado) => {
        selMunicipio.innerHTML = "";
        for (let i = 0; i < resultado.length; i++) {
            opcion = document.createElement('option');
            opcion.text = resultado[i]['nombre'];
            opcion.value = resultado[i]['id'];
            selMunicipio.appendChild(opcion);
            
        }
    })
    .catch(err =>{throw err});  
}
function municipioSeleccionado(value){
    const selLocalidades = document.querySelector('#listLocalidadNuevo');
    let url = base_url+"/Persona/getLocalidades?idmunicipio="+value;
    fetch(url)
        .then(res => res.json())
        .then((resultado) => {
            selLocalidades.innerHTML ="";
            for (let i = 0; i < resultado.length; i++) {
                opcion = document.createElement('option');
                opcion.text = resultado[i]['nombre'];
                opcion.value = resultado[i]['id'];
                selLocalidades.appendChild(opcion);
            }
        })
        .catch(err => {throw err});
}

function municipioSeleccionadoEdit(value){
    const selLocalidades = document.querySelector('#listLocalidadEdit');
    let url = base_url+"/Persona/getLocalidades?idmunicipio="+value;
    fetch(url)
        .then(res => res.json())
        .then((resultado) => {
            selLocalidades.innerHTML ="";
            for (let i = 0; i < resultado.length; i++) {
                opcion = document.createElement('option');
                opcion.text = resultado[i]['nombre'];
                opcion.value = resultado[i]['id'];
                selLocalidades.appendChild(opcion);
            }
        })
        .catch(err => {throw err});
}

function fntEditPersona(idPersona){
    var idPersona = idPersona;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/Persona/getPersonaEdit/'+idPersona;
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            if(objData){
                //console.log(objData);
                document.querySelector("#idEdit").value = objData.id;
                document.querySelector("#txtNombreEdit").value = objData.nombre_persona;    
                document.querySelector("#txtApellidoPaEdit").value = objData.ap_paterno;
                document.querySelector("#txtApellidoMaEdit").value = objData.ap_materno;
                document.querySelector("#txtDireccionEdit").value = objData.direccion;
                document.querySelector("#txtEdadEdit").value = objData.edad;
                document.querySelector('#listSexoEdit').querySelector('option[value="'+objData.sexo+'"]').selected = true;
                document.querySelector("#txtCPEdit").value = objData.cp;
                document.querySelector("#txtColoniaEdit").value = objData.colonia;
                document.querySelector("#txtTelCelEdit").value = objData.tel_celular;
                document.querySelector("#txtTelFiEdit").value = objData.tel_fijo;
                document.querySelector("#txtEmailEdit").value = objData.email;
                document.querySelector('#listEstadoCivilEdit').querySelector('option[value="'+objData.edo_civil+'"]').selected = true;
                document.querySelector("#txtOcupacionEdit").value = objData.ocupacion;
                document.querySelector('#txtCURPEdit').value = objData.curp;
                //document.querySelector("#txtValidacionEdit").value = objData.validacion;
                document.querySelector('#listEscolaridadEdit').querySelector('option[value="'+objData.id_escolaridad+'"]').selected = true;
                document.querySelector('#listNivelCarreraInteresEdit').querySelector('option[value="'+objData.id_nivel_carrera_interes+'"]').selected = true;
                fnCarreraInteresEdit(objData.id_nivel_carrera_interes,objData.id_carrera_interes);
                var idEstadoPersona = "";
                var idMunicipioPersona = "";
                var idLocalidadPersona = "";
                document.querySelector('#listMunicipioEdit').innerHTML = "";
                document.querySelector('#listLocalidadEdit').innerHTML = "";
                let url = base_url+"/Plantel/getListEstados";
                fetch(url)
                    .then(res => res.json())
                    .then((resultado) => {
                    for (let i = 0; i < resultado.length; i++) {
                        document.querySelector('#listEstadoEdit').innerHTML += "<option value='"+resultado[i]['id']+"'>"+resultado[i]['nombre']+"</option>"
                        if(resultado[i]['id'] == objData.idest){
                            idEstadoPersona = resultado[i]['id'];
                            select = document.querySelector('#listEstadoEdit');
                            var opt = document.createElement('option');
                            opt.value = resultado[i]['id'];
                            opt.innerHTML = resultado[i]['nombre'];
                            opt.setAttribute("selected","");
                            select.appendChild(opt);
                            let urlMunicipios = base_url+"/Plantel/getMunicipios?idestado="+idEstadoPersona;
                            fetch(urlMunicipios)
                                .then(res => res.json())
                                .then((resultadoMunicipio) =>{
                                    resultadoMunicipio.forEach(element => {
                                        document.querySelector('#listMunicipioEdit').innerHTML += "<option value='"+element['id']+"'>"+element['nombre']+"</option>"
                                        if(element['id'] == objData.idmun){
                                            idMunicipioPersona = element['id'];
                                            selectMunicipio = document.querySelector('#listMunicipioEdit');
                                            var optMunicipio = document.createElement('option');
                                            optMunicipio.value = element['id'];
                                            optMunicipio.innerHTML = element['nombre'];
                                            optMunicipio.setAttribute("selected","");
                                            selectMunicipio.appendChild(optMunicipio);
                                            let urlLocalidades = base_url+"/Plantel/getLocalidades?idmunicipio="+idMunicipioPersona;
                                            fetch(urlLocalidades)
                                                .then(res => res.json())
                                                .then((resultadoLocalidad) =>{
                                                    resultadoLocalidad.forEach(element => {
                                                        document.querySelector('#listLocalidadEdit').innerHTML += "<option value='"+element['id']+"'>"+element['nombre']+"</option>"
                                                        if(element['id'] == objData.id_localidad){
                                                            idLocalidadPersona = element['id'];
                                                            selectLocalidades = document.querySelector('#listLocalidadEdit');
                                                            var optLocalidad = document.createElement('option');
                                                            optLocalidad.value = element['id'];
                                                            optLocalidad.innerHTML = element['nombre'];
                                                            optLocalidad.setAttribute("selected","");
                                                            selectLocalidades.appendChild(optLocalidad);
                                                        }
                                                    });
                                                })
                                                .catch(err => {throw err});
                                        }

                                    });
                                })
                                .catch(err => {throw err});
                        }
                    }
                })
                .catch(err => { throw err });
                document.querySelector('#listEstatusEdit').querySelector('option[value="'+objData.estatus+'"]').selected = true;

            }
        }
    }
}

var formEditPersona = document.querySelector("#formPersonaEdit");
    formEditPersona.onsubmit = function(e){
        e.preventDefault();
        var intId = document.querySelector("#idEdit").value;
        var strNombre = document.querySelector("#txtNombreEdit").value;
        var strApellidoPat = document.querySelector("#txtApellidoPaEdit").value;
        var strApellidoMat = document.querySelector("#txtApellidoMaEdit").value;
        var intEdad = document.querySelector("#txtEdadEdit").value;
        var strSexo = document.querySelector('#listSexoEdit').value;    
        var strEstadoC = document.querySelector('#listEstadoCivilEdit').value;
        var strOcupacion = document.querySelector("#txtOcupacionEdit").value;
        var strCURP = document.querySelector("#txtCURPEdit").value;
        var intEscolaridad = document.querySelector('#listEscolaridadEdit').value;
        //var intNivelCarreraInteres = document.querySelector('#listNivelCarreraInteresEdit').value;
        //var intCarreraInteres = document.querySelector('#listCarreraInteresEdit').value;
        //var strTelCel = document.querySelector("#txtTelCelEdit").value;
        //var strTelFij = document.querySelector("#txtTelFiEdit").value;
        //var strEmail = document.querySelector("#txtEmailEdit").value;
        var intEstado = document.querySelector('#listEstadoEdit').value;
        var intMunicipio = document.querySelector('#listMunicipioEdit').value;
        var intLocalidad = document.querySelector('#listLocalidadEdit').value;
        var strColonia = document.querySelector("#txtColoniaEdit").value;
        var intCP = document.querySelector("#txtCPEdit").value;
        var strDireccion = document.querySelector("#txtDireccionEdit").value;
        var intEstatus = document.querySelector('#listEstatusEdit').value;
        //var intCategoria = document.querySelector('#listCategoriaEdit').value;

        if (intId == '' || strNombre == '' || strApellidoPat == '' || strApellidoMat == '' || intEdad == '' 
        || strSexo == '' || strEstadoC == '' || strOcupacion == '' || strCURP == '' || intEscolaridad == '' 
        || intEstado == '' || intMunicipio == ''
        || intLocalidad == '' || strColonia == '' || intCP == '' || strDireccion == '' || intEstatus == ''){
            swal.fire("Atención", "Atención todos los campos son obligatorios", "warning");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Persona/setPersona';
        var formData = new FormData(formEditPersona);
        request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function() {
                if(request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    //console.log(objData);
                    if(objData.estatus){
                        $('#formPersonaEdit').modal("hide");
                        formEditPersona.reset();
                        swal.fire("Persona", objData.msg, "success").then((result) =>{
                            $('#dimissModalEdit').click();
                        });
                        tablePersonas.api().ajax.reload();  
                    }else{
                        swal.fire("Error",objData.msg, "error");
                    }
                }
                return false;
            }
}

function fntVerPersona(idPersona){
    var idPersona = idPersona;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/Persona/getPersonaVer/'+idPersona;
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            if(objData){
                console.log(objData);
                document.querySelector("#idVer").value = objData.id;
                document.querySelector("#txtNombreVer").value = objData.nombre_persona;    
                document.querySelector("#txtApellidoPaVer").value = objData.ap_paterno;
                document.querySelector("#txtApellidoMaVer").value = objData.ap_materno;
                document.querySelector("#txtDireccionVer").value = objData.direccion;
                document.querySelector("#txtEdadVer").value = objData.edad;
                document.querySelector('#listSexoVer').innerHTML = "<option>"+objData.sexo+"</option>";
                document.querySelector("#txtCPVer").value = objData.cp;
                document.querySelector("#txtColoniaVer").value = objData.colonia;
                document.querySelector("#txtTelCelVer").value = objData.tel_celular;
                document.querySelector("#txtTelFiVer").value = objData.tel_fijo;
                document.querySelector("#txtEmailVer").value = objData.email;
                document.querySelector('#listEstadoCivilVer').innerHTML = "<option>"+objData.edo_civil+"</option>";
                document.querySelector("#txtOcupacionVer").value = objData.ocupacion;
                document.querySelector("#txtCURPVer").value = objData.curp;
                //document.querySelector("#txtValidacionVer").value = objData.validacion;
                document.querySelector('#listEscolaridadVer').innerHTML = "<option>"+objData.nombre_escolaridad+"</option>";
                document.querySelector('#listNivelCarreraInteresVer').innerHTML = "<option>"+objData.nombre_escolaridad+"</option>";
                document.querySelector('#listCarreraInteresVer').innerHTML = "<option>"+objData.nombre_carrera+"</option>";
                document.querySelector('#listEstadoVer').innerHTML = "<option>"+objData.nomestado+"</option>";
                document.querySelector('#listMunicipioVer').innerHTML = "<option>"+objData.nommunicipio+"</option>";
                document.querySelector('#listLocalidadVer').innerHTML = "<option>"+objData.nomlocalidad+"</option>";
                //document.querySelector('#listCategoriaVer').innerHTML = "<option>"+objData.edo_civil+"</option>";
                if(objData.estatus == 1){
                    document.querySelector('#listEstatusVer').innerHTML = "<option>Activo</option>";
                }else{
                    document.querySelector('#listEstatusVer').innerHTML = "<option>Inactivo</option>";
                }
            }
        }
    }
}


//Funcion para Eliminar Persona
function fntDelPersona(id) {
    swal.fire({
        icon: "question",
        title: "Eliminar Persona?",
        text: "¿Realmente quiere eliminar la Persona?",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33', 
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!"
    }). then((result) => {
        if (result.isConfirmed) 
        {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Persona/delPersona'; 
            var strData = "idPersona="+id;
            request.open("POST",ajaxUrl,true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.estatus)
                    {
                        swal.fire("Eliminado!", objData.msg , "success");
                        tablePersonas.api().ajax.reload();

                    } else {
                        swal.fire("Atención!", objData.msg , "error");
                    }
                }
            }
        }
    });
}

function nivelCarreraInteresSeleccionadoNew(value){
    let idNivel = value;
    let utlCarreraInteres = base_url+"/Persona/getCarreraInteres?idNivel="+idNivel;
    fetch(utlCarreraInteres)
    .then(res => res.json())
    .then((resultadoCarreraInteres) =>{
        console.log(resultadoCarreraInteres);
        document.querySelector('#listCarreraInteresNuevo').innerHTML = "<option>Seleccionar</option>";
        resultadoCarreraInteres.forEach(element => {
            document.querySelector('#listCarreraInteresNuevo').innerHTML += "<option value = '"+element.id+"'>"+element.nombre_carrera+"</option>";
        });
    })
    .catch(err => {throw err});
}

function fnCarreraInteresEdit(value,id_carrera_interes){
    let idNivel = value;
    let idCarreraInteres = id_carrera_interes;
    let utlCarreraInteres = base_url+"/Persona/getCarreraInteres?idNivel="+idNivel;
    fetch(utlCarreraInteres)
    .then(res => res.json())
    .then((resultadoCarreraInteres) =>{
        document.querySelector('#listCarreraInteresEdit').innerHTML = "<option>Seleccionar</option>";
        resultadoCarreraInteres.forEach(element => {
            document.querySelector('#listCarreraInteresEdit').innerHTML += "<option value = '"+element.id+"'>"+element.nombre_carrera+"</option>";
            document.querySelector('#listCarreraInteresEdit').querySelector('option[value="'+idCarreraInteres+'"]').selected = true;
        });
    })
    .catch(err => {throw err});
}

function nivelCarreraInteresSeleccionadoEdit(value){
    let idNivel = value;
    let utlCarreraInteres = base_url+"/Persona/getCarreraInteres?idNivel="+idNivel;
    fetch(utlCarreraInteres)
    .then(res => res.json())
    .then((resultadoCarreraInteres) =>{
        console.log(resultadoCarreraInteres);
        document.querySelector('#listCarreraInteresEdit').innerHTML = "<option>Seleccionar</option>";
        resultadoCarreraInteres.forEach(element => {
            document.querySelector('#listCarreraInteresEdit').innerHTML += "<option value = '"+element.id+"'>"+element.nombre_carrera+"</option>";
        });
    })
    .catch(err => {throw err});
}