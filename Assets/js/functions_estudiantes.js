var tableEstudiantes;
//var formModalidad = document.querySelector("#formModalidad");
//var formModalidadEdit = document.querySelector("#formModalidadEdit");

//Funcion para Datatable de Mostrar todas las Modalidades
document.addEventListener('DOMContentLoaded', function(){
	tableEstudiantes = $('#tableEstudiantes').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Estudiantes/getEstudiantes",
            "dataSrc":""
        },
        "columns":[
            {"data":"numeracion"},
            {"data":"nombre_persona"},
            {"data":"apellidos"},
            {"data":"nombre_plantel"},
            {"data":"nombre_carrera"},
            {"data":"grado"},
            {"data":"nombre_salon"},
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
$('#tableEstudiantes').DataTable();
