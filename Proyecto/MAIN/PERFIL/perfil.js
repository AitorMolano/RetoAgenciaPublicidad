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