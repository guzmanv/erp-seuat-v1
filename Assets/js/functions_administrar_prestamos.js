var tableBiblioteca;

document.addEventListener('DOMContentLoaded', function(){

	tableRoles = $('#tableRoles').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	//url:"<?php echo media(); ?>/plugins/Spanish.json"
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Biblioteca/getPrestamos",
            "dataSrc":""
        },
        "columns":[
            {"data":"id"},
            {"data":"nombre_estudiante"},
			{"data":"nombre_libro"},
            {"data":"numero_isbn"},
            {"data":"fecha_prestamo"},
			{"data":"fecha_devolucion"},
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

$('#tableRoles').DataTable();