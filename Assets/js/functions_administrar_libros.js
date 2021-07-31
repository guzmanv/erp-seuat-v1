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
            "url": " "+base_url+"/Biblioteca/getLibros",
            "dataSrc":""
        },
        "columns":[
            {"data":"id"},
            {"data":"titulo_libro"},
			{"data":"subtitulo_libro"},
            {"data":"nombre_autor"},
            {"data":"numero_isbn"},
			{"data":"cantidad"},
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
	    "order": [[ 0, "desc" ]],
	    "iDisplayLength": 25
    });


});

$('#tableRoles').DataTable();