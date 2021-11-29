$(document).ready(function() {
    crearEventos();
});

function crearEventos() {
    validarUsuario();
    validarEmail();
    validarPassword();
    $("#updatePerfil").click(function() {
        window.location.href="./perfil.php";
    });
    $("#deletePerfil").click(function() {
        var si = confirm("Se eliminará el perfil permanentemente. ¿Esta seguro?");
        if(si){window.location.href="login.php";}
    });
}

function validarEmail() {
    $("#email").focusout(function() {
        try {
            if ($("#email").value.lenght() > 50) {
                throw "Tamaño maximo del email es de 50 caracteres.";
            }
            $("#email").css("color", "green");

        } catch {
            $("#email").css("color", "red");
            alert(error);
        }
    });
}

function validarUsuario() {
    $("#usuario").focusout(function() {
        try {
            if ($("#usuario").value.lenght() > 50) {
                throw "Tamaño maximo del nombre de usuario es de 50 caracteres.";
            }
            if ($("#usuario").value.lenght() < 4) {
                throw "Tamaño minimo del nombre de usuario es de 4 caracteres.";
            }
            let patron = "$[A-Za-z0-9]{4, 50}^"
            if (!patron.test($("#usuario").value)) {
                throw "Formato del nombre de usuario incorrecto: Solo puede contener letras y numeros.";
            }
            $("#usuario").css("color", "green");

        } catch {
            $("#usuario").css("color", "red");
            alert(error);
        }
    });
}

function validarPassword() {
    $("#password").focusout(function() {
        try {
            if ($("#password").value.lenght() > 50) {
                throw "Tamaño maximo de la contraseña es de 50 caracteres.";
            }
            if ($("#password").value.lenght() < 4) {
                throw "Tamaño minimo de la contraseña es de 4 caracteres.";
            }
            let patron = "$[[A-Za-z0-9]+]{4, 50}^"
            if (!patron.test($("#password").value)) {
                throw "Formato de la contraseña incorrecto: Debe contener al menos una MAYUSCULA, una minuscula y un número.";
            }

            $("#password").css("color", "green");

        } catch {
            $("#password").css("color", "red");
            alert(error);
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