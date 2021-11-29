$(document).ready(function() {
    crearEventos();
});

function crearEventos() {
    $("bEditarPefil").click(function() {
        windows.location.href("./editarPerfil.php");
    });
    $("bAnunciosFav").click(function() {
        __ajax("../../MAIN/ANUNCIOS/anunciosFav.php", JSON.stringify(getCookie("PerfilActual")))
            .done(function(arrayAnuncios) {
                //codigo de guille
            });
    });
    $("bAnunciosPerfil").click(function() {
        __ajax("../../MAIN/ANUNCIOS/misAnuncios.php", JSON.stringify(getCookie("PerfilActual")))
            .done(function(arrayAnuncios) {
                //codigo de guille
            });
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