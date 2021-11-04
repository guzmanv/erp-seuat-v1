document.addEventListener('DOMContentLoaded', function(){
	fnPlantelSeleccionadoDatatable(document.querySelector('#listPlantelDatatable').value);
});
function fnPlantelSeleccionadoDatatable(value){
    var idPlantel = value;
    var nombrePlantel = document.querySelector('#listPlantelDatatable');
    var text= nombrePlantel.options[nombrePlantel.selectedIndex].text;
    document.querySelector('#nombrePlantelDatatable').innerHTML = text;
    tableInscripciones = $('#tableInscripciones').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Inscripcion/getInscripcionesControlEscolar?idplantel="+idPlantel,
            "dataSrc":""
        },
        "columns":[
            {"data":"numeracion"},
            {"data":"nombre_carrera"},
            {"data":"nombre_nivel_educativo"},
            {"data":"grado"},
            {"data":"nombre_plan"},
            {"data":"nombre_turno"},
            {"data":"nombre_grupo"},
            {"data":"total"},
            {"data":'options'}

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
}$('#tableInscripciones').DataTable();
