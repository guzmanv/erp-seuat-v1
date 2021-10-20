let tableCategoriaServicios;
let divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){

	tableCategoriaServicios = $('#tableCategoriaServicios').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	//url:"<?php echo media(); ?>/plugins/Spanish.json"
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Categoria_servicios/getCategoriaServicios",
            "dataSrc":""
        },
        "columns":[
            {"data":"id"},
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
	    "order": [[0, "desc"]],
	    "iDisplayLength": 25
    });

    if(document.querySelector("#formCategoria_servicios")){
        let formCategoria_servicios = document.querySelector("#formCategoria_servicios");
        formCategoria_servicios.onsubmit = function(e) {
            e.preventDefault();
            let intIdCategoria_servicios = document.querySelector('#txtId').value;
            let strNombre_categoria = document.querySelector('#txtNombre_categoria').value;
            let intEstatus = document.querySelector('#txtEstatus').value;
            let strFecha_creacion = document.querySelector('#txtFecha_creacion').value;
            let strFecha_actualizacion = document.querySelector('#txtFecha_actualizacion').value;
            let intId_usuario_creacion = document.querySelector('#txtId_usuario_creacion').value;
            let intId_usuario_actualizacion = document.querySelector('#txtId_usuario_actualizacion').value;
           
            if(strNombre_categoria == '' || intEstatus == '' || strFecha_creacion == '' || intId_usuario_creacion == '' )
            {
                swal.fire("Atención", "Todos los campos son obligatorios." , "error");
                return false;
            }

            let elementsValid = document.getElementsByClassName("valid");
            for (let i = 0; i < elementsValid.length; i++) { 
                if(elementsValid[i].classList.contains('is-invalid')) { 
                    swal.fire("Atención", "Por favor verifique los campos en rojo." , "error");
                    return false;
                } 
            } 
            divLoading.style.display = "flex";
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url+'/Categoria_servicios/setCategoria_servicios'; 
            let formData = new FormData(formCategoria_servicios);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    let objData = JSON.parse(request.responseText);
                    if(objData.estatus)
                    {
                        $('#modalCategoria_servicios').modal("hide");
                        formCategoria_servicios.reset();
                        swal.fire("Usuarios", objData.msg ,"success");
                    }else{
                        swal.fire("Error", objData.msg , "error");
                    }
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }


}, false);