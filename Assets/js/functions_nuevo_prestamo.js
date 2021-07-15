$(function () {
  //Date picker
  $('#reservationdate').datetimepicker({
      format: 'L'
  });
})

//Modal para buscar Alumno
$(".btnBuscarAlumno").click(function(){
    Swal.fire({
        title: 'Buscar Alumno',
        html: `<input type="text" class="form-control" placeholder="Nombre del Alumno" aria-label="nombre" aria-describedby="basic-addon1">
               <table id="tableRoles" class="table table-bordered table-striped table-sm"><br>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>JOSE</td>
                        <td>SANTIZ RUIZ</td>
                        <td><button>Agregar</button></td>
                    </tr>
                    <tr>
                        <td>FRANCISCO</td>
                        <td>PEREZ GOMEZ</td>
                        <td><button>Agregar</button></td>
                    </tr>
                </tbody>
                </table>
        `,
    });
})