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
            "url": " "+base_url+"/Biblioteca/getAnaqueles",
            "dataSrc":""
        },
        "columns":[
            {"data":"id"},
            {"data":"nombre_anaquel"},
			{"data":"numero_charola"},
            {"data":"abreviatura"},
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
	    "order": [[ 1, "asc" ]],
	    "iDisplayLength": 25
    });


});

$('#tableRoles').DataTable();

//Funcion para nuevo Anaquel
function agregarAnaquel(){
	var nombreAnaquel = document.getElementById("nombreAnaquel").value;
	var numeroCharola = document.getElementById("numeroCharolas").value;

    let url = base_url+"/Biblioteca/setAnaquel?name="+nombreAnaquel+"&"+"number="+numeroCharola;
        fetch(url)
            .then(res => res.json())
            .then((out) => {
				Swal.fire(
					'Exito!',
					'Ha sido agregado el Anaquel.',
					'success'
				  ).then((result)=>{
					location.href= base_url+"/Biblioteca/ubicacion";
				  })
            })
            .catch(err => { throw err });

}