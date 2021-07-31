let url = new URLSearchParams(location.search);
var message = url.get('mssg');
if(message == "ok"){
    Swal.fire(
        'Éxito',
        'Los datos ha sido guardado correctamente',
        'success'
      ).then((result) =>{
        location.href =base_url+"/Biblioteca/AdministrarLibros";
      })
}

console.log("llamando funcion");
function changeFunc(answer){
  console.log(answer);
}