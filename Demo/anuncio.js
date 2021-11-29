$(document).ready(function() {
    crearEventos();
});

function crearEventos() {
    $("botonPublicar").click(function() {
        window.location.href("verProducto.php");
    });
    $("botonCancel").click(function() {
        var r = confirm("¿Seguro que quieres cancelar este anuncio?");
    if (r == true) {
      window.location.href("verProducto.php");
    } 
    });
}

$("#botonMenu").click(function(){
    mostrarMenu();
});

function mostrarMenu() {  
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