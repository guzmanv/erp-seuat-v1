$(function () {
  //Date picker
  $('#reservationdate').datetimepicker({
      format: 'L'
  });

  
})

//Modal para buscar Alumno
function buscarAlumno() {
    var textoBusqueda = $("input#busquedaAlumno").val();
    if (textoBusqueda != "") {
        //$("#resultadoBusqueda").html(mensaje);
	    tableRoles = $('#tableAlumnos').dataTable( {
		    "aProcessing":true,
		    "aServerSide":true,
            "language": {
        	    //url:"<?php echo media(); ?>/plugins/Spanish.json"
        	    "url": " "+base_url+"/Assets/plugins/Spanish.json"
            },
            "ajax":{
                "url": " "+base_url+"/Biblioteca/buscarNombreAlumnoModal?val="+textoBusqueda,
                "dataSrc":""
            },
            "columns":[
                {"data":"nombre_estudiante"},
                {"data":"options"}
            ],
            "responsive": true,
	        "paging": false,
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
        $('#tableAlumnos').DataTable();
     }
}

//Modal para buscar Alumno
function buscarISBN() {
    var textoBusqueda = $("input#busquedaISBN").val();
    if (textoBusqueda != "") {
        //$("#resultadoBusqueda").html(mensaje);
	    tableRoles = $('#tableLibros').dataTable( {
		    "aProcessing":true,
		    "aServerSide":true,
            "language": {
        	    //url:"<?php echo media(); ?>/plugins/Spanish.json"
        	    "url": " "+base_url+"/Assets/plugins/Spanish.json"
            },
            "ajax":{
                "url": " "+base_url+"/Biblioteca/buscarISBNModal?val="+textoBusqueda,
                "dataSrc":""
            },
            "columns":[
                {"data":"titulo_libro"},
                {"data":"nombre_autor"},
                {"data":"options"}
            ],
            "responsive": true,
	        "paging": false,
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
        $('#tableLibros').DataTable();
     }
}

function seleccionarAlumno(answer){
    let nombreAlumno = answer.id;
    document.getElementById("matricula").value=nombreAlumno;
}

function seleccionarLibro(answer){
    let ISBN = answer.getAttribute("isbn");
    document.getElementById("isbn").value=ISBN;
}

let url = new URLSearchParams(location.search);
var message = url.get('mssg');
if(message == "ok"){
    Swal.fire(
        'Éxito',
        'Los datos ha sido guardado correctamente',
        'success'
      ).then((result) =>{
        location.href =base_url+"/Biblioteca/AdministrarPrestamos";
      })
}