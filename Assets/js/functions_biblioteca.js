document.addEventListener('DOMContentLoaded', function(){
    $folio = document.querySelector('body').getAttribute('data-temp');
    let url = base_url+"/Biblioteca/getDashboard";
        fetch(url)
            .then(res => res.json())
            .then((out) => {
                document.getElementById("ct-libros").innerHTML = out.req_libros;
                document.getElementById("ct-prestamos").innerHTML = out.req_prestamos;
                document.getElementById("ct-devoluciones").innerHTML = out.req_devoluciones;
                document.getElementById("ct-usuarios").innerHTML = out.req_usuarios;
                document.getElementById("ct-autores").innerHTML = out.req_autores;
                document.getElementById("ct-categorias").innerHTML = out.req_categorias;

            })
            .catch(err => { throw err });
    });