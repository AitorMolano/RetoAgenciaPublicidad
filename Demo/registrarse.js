class Perfil {
    constructor(idPerfil, usuario, password, email, telefono, direccion, provincia, localidad, pais, cp) {
        this.idPerfil = idPerfil;
        this.usuario = usuario;
        this.password = password;
        this.email = email;
        this.telefono = telefono;
        this.direccion = direccion;
        this.provincia = provincia;
        this.localidad = localidad;
        this.pais = pais;
        this.cp = cp;
    }
}

$(document).ready(function() {
    crearEventos();
});

function crearEventos() {
    validar();
    registrar();
}

function validar() {
    validarEmail();
    validarUsuario();
    validarPassword();
    validarConfPassword();
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

function validarConfPassword() {
    $("#confPassword").focusout(function() {
        try {
            if ($("#password").value != $("#confPassword").value) {
                throw "La contraseñas no coincide con la confirmacion de la contraseña.";
            }

            $("#confPassword").css("color", "green");

        } catch {
            $("#confPassword").css("color", "red");
            alert(error);
        }
    });
}

function registrar() {
    $("#bRegistrarse").click(function() {
        alert("Nuevo usuario registrado!!!")
        window.location.href="./login.php";
    });
}

function vaciarRegistro() {
    $("#email").value = "";
    $("#usuario").value = "";
    $("#password").value = "";
    $("#confPassword").value = "";
    $("#email").focus;
}