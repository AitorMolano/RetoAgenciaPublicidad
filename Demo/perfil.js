
$(document).ready(function() {
    crearEventos();
});

function crearEventos() {
    $("#bEditarPefil").click(function() {
        window.location.href="./editarPerfil.php";
    });
    $("#bAnunciosPerfil").click(function() {
        window.location.href="./anuncio.php";
    });
    $("#bNuevoAnuncio").click(function() {
        window.location.href="./misfavs.php";
    });
    $("#bAnunciosPerfil").click(function() {
        window.location.href="./misanuncios.php";
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