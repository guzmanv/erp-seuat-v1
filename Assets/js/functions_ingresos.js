var tablePersonas;
//var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){

	tablePersonas = $('#tablePersonas').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	//url:"<?php echo media(); ?>/plugins/Spanish.json"
        	"url": " "+base_url+"/Assets/plugins/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Ingresos/getIngresos",
            "dataSrc":""
        },
        "columns":[
            {"data":"id"},
            {"data":"nombres"},
            {"data":"apellidos"},
            {"data":"telefono"},
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