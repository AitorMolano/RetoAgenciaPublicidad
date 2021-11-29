$(document).ready(function () {
    cambiarIcono();
});

$("#botonMenu").click(function(){
    mostrarMenu();
});

function mostrarMenu(){  
    document.getElementById("menu").style.display = "none";
    if(screen.width <= 480){
        document.getElementById("menu-vertical").style.width = "100%";
    }else{
        document.getElementById("menu-vertical").style.width = "45%";
    }
};

function ocultarMenu() {
    document.getElementById("menu-vertical").style.width = "0";
    document.getElementById("menu").style.display = "inline";
};

$("#bBuscar").click(function(){
    window.location.href="verProducto..php";
});

function cambiarIcono(){
    $('#cambiarIcono').click(function() {
        icon = $(this).find("i");
        if(icon.attr('class').includes("sinMarcar")){
            icon.remove();
            $("#cambiarIcono").append("<i class=\"fas fa-heart fav marcardo\"></i>");
        }else{
            icon.remove();
            $("#cambiarIcono").append("<i class=\"far fa-heart fav sinMarcar\"></i>");
        }
    });
};

/*function crearEventos() {
    $("#bBuscar").click(function(){
        var datosBusqueda = Array();
        datosBusqueda.push($("#titulo").value);
        datosBusqueda.push($("#precio").value);
        json = JSON.stringify(datosBusqueda);
        __ajax("verProdductos.php", json)
            .done(function(listaAnuncios){
                if(listaAnuncios != ""){
                    listaAnuncios=json.parse(listaAnuncios);
                    var div = document.body.appendChild(document.createElement("div"));
                    listaAnuncios.forEach(element => {
                        div.appendChild(document.createElement("p").setValue(element.titulo));
                        div.appendChild(document.createElement("p").setValue(element.precio));
                        div.appendChild(document.createElement("a").setValue("Ver mas").href("verProductos.php?accion=mostrarmas"))
                    });
                }
                else{
                    alert ("No se encontro ningun anuncio");
                }
            }); 
    });
}*/
