var tableInscripciones;
var idPersonaSeleccionada;
var formInscripcionNueva = document.querySelector("#formInscripcionNueva");
var formTutorNuevo = document.querySelector("#formAgregarTutor");

document.getElementById("btnAnterior").style.display = "none";
document.getElementById("btnAnteriorEdit").style.display = "none";
document.getElementById("btnSiguiente").style.display = "none";
document.getElementById("btnSiguienteEdit").style.display = "none";
document.getElementById("btnActionFormNuevo").style.display = "none";
document.getElementById("btnActionFormEdit").style.display = "none";
var tabActual = 0;
var tabActualEdit = 0;
mostrarTab(tabActual);
mostrarTabEdit(tabActualEdit);

document.addEventListener('DOMContentLoaded', function(){
	tableInscripciones = $('#tableInscripciones').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Inscripcion/getInscripcionesAdmision",
            "dataSrc":""
        },
        "columns":[
            {"data":"numeracion"},
            {"data":"nombre_persona"},
            {"data":"nombre_plantel"},
            {"data":"nombre_carrera"},
            {"data":"grado"},
            {"data":"grupo"},
            {"data":"validacion"},
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
$('#tableInscripciones').DataTable();

function buscarPersona(){
    var textoBusqueda = $("input#busquedaPersona").val();
    var tablePersonas;
    tablePersonas = $('#tablePersonas').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            //url:"<?php echo media(); ?>/plugins/Spanish.json"
            "url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Inscripcion/buscarPersonaModal?val="+textoBusqueda,
            "dataSrc":""
        },
        "columns":[
            {"data":"nombre"},
            {"data":"options"}
        ],
        "responsive": true,
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "scrollY": '42vh',
        "scrollCollapse": true,
        "bDestroy": true,
        "order": [[ 0, "desc" ]],
        "iDisplayLength": 5
    });
    $('#tablePersonas').DataTable();
}

function seleccionarPersona(answer){
    idPersonaSeleccionada = answer.id;
    let nombrePersona = answer.getAttribute('rl');
    document.querySelector('#txtNombreNuevo').value = nombrePersona;
    document.querySelector('#idPersonaSeleccionada').value = idPersonaSeleccionada; 
    $('#cerrarModalBuscarPersona').click();
}

formInscripcionNueva.onsubmit = function(e){
    e.preventDefault();
    var strNombrePersona = document.querySelector('#txtNombreNuevo').value;
    var intPlantel = document.querySelector('#listPlantelNuevo').value;
    var intCarrera = document.querySelector('#listCarreraNuevo').value;
    var strNombreTutor = document.querySelector('#txtNombreTutorAgregar').value;
    var strAppPaternoTutor = document.querySelector('#txtAppPaternoTutorAgregar').value;
    var strAppMaternoTutor = document.querySelector('#txtAppMaternoTutorAgregar').value;
    if(strNombrePersona == '' || intPlantel == '' || intCarrera == '' || strNombreTutor == '' || strAppPaternoTutor == ''|| strAppMaternoTutor == '' ){
        swal.fire("Atención","Atención todos los campos son obligatorios","warning");
        return false;
    }
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/Inscripcion/setInscripcion';
    var formData = new FormData(formInscripcionNueva);
    request.open("POST",ajaxUrl,true);
    request.send(formData);
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            //console.log(objData);
            if(objData.estatus){
                formInscripcionNueva.reset();
                swal.fire("Inscripcion",objData.msg,"success").then((result) =>{
                    $('#dimissModalNuevo').click();
                });
                tableInscripciones.api().ajax.reload();
            }else{
                swal.fire("Error",objData.msg,"error");
            }
        }
        return false;
    }
}

function fnPlantelSeleccionado(answer){
    const selCarreras = document.querySelector('#listCarreraNuevo');
    let url = base_url+"/Inscripcion/getCarreras?iplantel="+answer;
    fetch(url)
        .then(res => res.json())
        .then((resultado) => {
			selCarreras.innerHTML = "";
            for (let i = 0; i < resultado.length; i++) {
                opcion = document.createElement('option');
                opcion.text = resultado[i]['nombre_carrera'];
                opcion.value = resultado[i]['id'];
                selCarreras.appendChild(opcion);
            }
        })
        .catch(err => { throw err });
}

function fnPlantelSeleccionadoEdit(answer){
    const selCarreras = document.querySelector('#listCarreraEdit');
    let url = base_url+"/Inscripcion/getCarreras?iplantel="+answer;
    fetch(url)
        .then(res => res.json())
        .then((resultado) => {
			selCarreras.innerHTML = "";
            for (let i = 0; i < resultado.length; i++) {
                opcion = document.createElement('option');
                opcion.text = resultado[i]['nombre_carrera'];
                opcion.value = resultado[i]['id'];
                selCarreras.appendChild(opcion);
            }
        })
        .catch(err => { throw err });
}

function fnNavTab(numTab){
    var x = document.getElementsByClassName("tab");
    for(var i = 0; i<x.length;i++){
        x[i].style.display = "none";
    }
    x[numTab].style.display = "block";
    estadoIndicadores(numTab);
}
function fnNavTabEddit(numTab){
    //console.log(numTab);    
    var x = document.getElementsByClassName("tabEdit");
    for(var i = 0; i<x.length;i++){
        x[i].style.display = "none";
    }
    x[numTab].style.display = "block";
    estadoIndicadoresEdit(numTab);
}
function mostrarTab(tabActual){
    //console.log(tabActual);
    var tab = document.getElementsByClassName("tab");
    tab[tabActual].style.display = "block";
    if(tabActual == 0){
        document.getElementById("btnSiguiente").style.display = "inline";
        document.getElementById("btnAnterior").style.display = "none";
    }else{
        document.getElementById("btnAnterior").style.display = "inline";
    }
    if(tabActual == (tab.length - 1)){
        document.getElementById("btnSiguiente").style.display = "none";
        document.getElementById("btnActionFormNuevo").style.display = "inline";
    }else{
        document.getElementById("btnSiguiente").style.display = "inline";
        document.getElementById("btnActionFormNuevo").style.display = "none";
    }
    estadoIndicadores(tabActual);
}
function mostrarTabEdit(tabActualEdit){
    var tab = document.getElementsByClassName("tabEdit");
    //console.log(tab);
    tab[tabActualEdit].style.display = "block";
    if (tabActualEdit == 0) {
      document.getElementById("btnSiguienteEdit").style.display = "inline";
      document.getElementById("btnAnteriorEdit").style.display = "none";
    } else {
      document.getElementById("btnAnteriorEdit").style.display = "inline";
    }
    if (tabActualEdit == (tab.length - 1)) {
      document.getElementById("btnSiguienteEdit").style.display = "none";
      document.getElementById("btnActionFormEdit").style.display = "inline";
    } else {
      document.getElementById("btnSiguienteEdit").style.display = "inline";
      document.getElementById("btnActionFormEdit").style.display = "none";
    }
    estadoIndicadoresEdit(tabActualEdit)
} 
function pasarTab(n) {
    var x = document.getElementsByClassName("tab");
    //n = 1 : siguiente; n = -1 : anterior
    x[tabActual].style.display = "none";
    tabActual = tabActual + n;
    if (tabActual >= x.length) {
      //var jos = document.getElementById("formPlanEstudiosNueva").submit();
      //console.log(jos);
    }
    mostrarTab(tabActual);
    
  }
   function pasarTabEdit(n) {
    var x = document.getElementsByClassName("tabEdit");
    //n = 1 : siguiente; n = -1 : anterior
    x[tabActualEdit].style.display = "none";
    tabActualEdit = tabActualEdit + n;
    if (tabActualEdit >= x.length) {
      //var jos = document.getElementById("formPlanEstudiosNueva").submit();
      //console.log(jos);
    }
    mostrarTabEdit(tabActualEdit);
    
  } 
  function estadoIndicadores(tabActual) {
    var posStep, step = document.getElementsByClassName("step");
    var posTab, tab = document.getElementsByClassName("tab-nav");
    for (posStep = 0; posStep < step.length; posStep++) {
      step[posStep].className = step[posStep].className.replace(" active", "");
  
    }
    step[tabActual].className += " active";
    for (posTab = 0; posTab < tab.length; posTab++) {
      tab[posTab].className = tab[posTab].className.replace(" active", "");
    }
    tab[tabActual].className += " active";

    if(tabActual == 0){
        document.getElementById("btnSiguiente").style.display = "inline";
        document.getElementById("btnAnterior").style.display = "none";
    }else{
        document.getElementById("btnAnterior").style.display = "inline";
    }
    if(tabActual == (tab.length - 1)){
        document.getElementById("btnSiguiente").style.display = "none";
        document.getElementById("btnActionFormNuevo").style.display = "inline";
    }else{
        document.getElementById("btnSiguiente").style.display = "inline";
        document.getElementById("btnActionFormNuevo").style.display = "none";
    }
  }
   function estadoIndicadoresEdit(tabActualEdit) {
    var posStep, step = document.getElementsByClassName("stepEdit");
    var posTab, tab = document.getElementsByClassName("tab-navEdit");
    for (posStep = 0; posStep < step.length; posStep++) {
      step[posStep].className = step[posStep].className.replace(" active", "");
  
    }
    step[tabActualEdit].className += " active";
    for (posTab = 0; posTab < tab.length; posTab++) {
      tab[posTab].className = tab[posTab].className.replace(" active", "");
    }
    tab[tabActualEdit].className += " active";

    if(tabActualEdit == 0){
        document.getElementById("btnSiguienteEdit").style.display = "inline";
        document.getElementById("btnAnteriorEdit").style.display = "none";
    }else{
        document.getElementById("btnAnteriorEdit").style.display = "inline";
    }
    if(tabActualEdit == (tab.length - 1)){
        document.getElementById("btnSiguienteEdit").style.display = "none";
        document.getElementById("btnActionFormEdit").style.display = "inline";
    }else{
        document.getElementById("btnSiguienteEdit").style.display = "inline";
        document.getElementById("btnActionFormEdit").style.display = "none";
    } 
  } 

 function fnChkAlumnoTutor(){
    //console.log(idPersonaSeleccionada);
    if(document.querySelector('#chk-alumno-tutor').checked == true){
        let url = base_url+"/Inscripcion/getPersona?id="+idPersonaSeleccionada;
        fetch(url)
            .then(res => res.json())
            .then((resultado) => {
                document.querySelector('#txtNombreTutorAgregar').value = resultado['nombre_persona'];
                document.querySelector('#txtAppPaternoTutorAgregar').value = resultado['ap_paterno'];
                document.querySelector('#txtAppMaternoTutorAgregar').value = resultado['ap_materno'];
                document.querySelector('#txtTelCelularTutorAgregar').value = resultado['tel_celular'];
                document.querySelector('#txtTelFijoTutorAgregar').value = resultado['tel_fijo'];
                document.querySelector('#txtEmailTutorAgregar').value = resultado['email'];
            })
            .catch(err => { throw err });
     }else{

     }
 }

 function fntDocumentacionInscripcion(id){
    let url = base_url+"/Inscripcion/getDocumentos?id_alumno="+id;
    fetch(url)
        .then(res => res.json())
        .then((resultado) => {
            var contador = 0;
            var opciones = `<td><div class='custom-control custom-switch custom-switch-off-danger custom-switch-on-success'>
                            <input type='checkbox' aria-label='Checkbox for following text input'></div></td><td>
                            <div class='custom-control custom-switch custom-switch-off-danger custom-switch-on-success'>
                            <input type='checkbox' aria-label='Checkbox for following text input'></div></td><td>
                            <div class='custom-control custom-switch custom-switch-off-danger custom-switch-on-success'>
                            <input type='checkbox' aria-label='Checkbox for following text input'></div></td>`;
                            
            document.querySelector('#tbDocumentacionIns').innerHTML = "";
            resultado.forEach(element => {
                contador +=  1;
                document.querySelector('#tbDocumentacionIns').innerHTML += '<tr><th>'+contador+'</th><td>'+element['tipo_documento']+'</td>'+opciones+'</tr>';

            });
/* ocument.querySelector('#txtNombreTutorAgregar').value = resultado['nombre_persona'];
            document.querySelector('#txtAppPaternoTutorAgregar').value = resultado['ap_paterno'];
            document.querySelector('#txtAppMaternoTutorAgregar').value = resultado['ap_materno'];
            document.querySelector('#txtTelCelularTutorAgregar').value = resultado['tel_celular'];
            document.querySelector('#txtTelFijoTutorAgregar').value = resultado['tel_fijo'];
            document.querySelector('#txtEmailTutorAgregar').value = resultado['email']; */
        })
        .catch(err => { throw err });
 }
 function fntEditInscripcion(idInscripcion){
    var idInscripcion = idInscripcion;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl  = base_url+'/Inscripcion/getInscripcion/'+idInscripcion;
    request.open("GET",ajaxUrl ,true);
	request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            console.log(objData);
            if(objData){   
                document.querySelector("#txtNombreEdit").value = objData[0].nombre_persona+" "+objData[0].ap_paterno+" "+objData[0].ap_materno;
                document.querySelector('#listPlantelEdit').querySelector('option[value="'+objData[0].id_plantel+'"]').selected = true;
                document.querySelector('#listCarreraEdit').innerHTML = "<option value='"+objData[0].id_carrera+"' selected>"+objData[0].nombre_carrera+"</option>";

            }else{
                swal.fire("Error", objData.msg , "error");
            }
        }
    }
}