class Login {
    constructor(email, password) {
        this.email = email;
        this.password = password;
    }
}

$(document).ready(function() {
    crearEventos();
});

function crearEventos() {
    $("#bLogin").click(function() {
        window.location.href="index.php";
    });

    $("#bRegistrarse").click(function() {
        window.location.href="registrarse.php";  
    });
}

