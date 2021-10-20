document.addEventListener('DOMContentLoaded', function(){
	tableInscripciones = $('#tableInscripciones').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Inscripcion/getInscripcionesControlEscolar",
            "dataSrc":""
        },
        "columns":[
            {"data":"numeracion"},
            {"data":"nombre_persona"},
            {"data":"nombre_plantel"},
            {"data":"nombre_carrera"},
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