<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="MEDIA/ICONOS/favicon.png" type="image">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>LoVendo! - Inicio</title>
</head>
<body>
<header>
        <div id="logotipo">
            <img src="MEDIA/IMAGENES/logo.png" alt="logo"/>
        </div>
        <div id="menu">
            <i class="fas fa-bars" id="botonMenu"></i>
        </div>
</header>
<div id="menu-vertical">
    <a href="#" class="boton-cerrar" onclick="ocultarMenu()">&times;</a>
        <div id="buscador">
            <input type="text" id="busqueda" placeholder="Buscador"/>
            <input type="button" id="buscar" value="Buscar"/>
        </div>
        <a href="./perfil.php"><div id="perfil">
            <i class="fas fa-address-card"></i><p>Sesión</p>
        </div></a>
        <div id="categorias">
            <a href="#" onclick="ocultarMenu()"><div id="Casa y jardin">
                <i class="fas fa-home"></i>
                <p>Casa y Jardin</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Informatica">
                <i class="fas fa-desktop"></i>
                <p>Informatica</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Imagen y sonido">
                <i class="fas fa-camera"></i>
                <p>Imagen y Sonido</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Juegos">
                <i class="fas fa-gamepad"></i>
                <p>Juegos</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Moviles y telefonia">
                <i class="fas fa-mobile-alt"></i>
                <p>Moviles y telefonía</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Moda y complementos">
                <i class="fas fa-tshirt"></i>
                <p>Moda y complementos</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Deportes">
                <i class="fas fa-futbol"></i>
                <p>Deportes</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Mascotas">
                <i class="fas fa-cat"></i>
                <p>Mascotas</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Aficiones y ocio">
                <i class="fas fa-compact-disc"></i>
                <p>Aficiones y Ocio</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Motor">
                <i class="fas fa-car-alt"></i>
                <p>Motor</p>
            </div></a>
            <a href="#" onclick="ocultarMenu()"><div id="Caza y pesca">
                <i class="fas fa-fish"></i>
                <p>Caza y Pesca</p>
            </div></a>
        </div>
    </div>
</div>
<div id="EditarPerfil">
    <h1>Editar Perfil</h1>
    <form id="fPerfil">
        <label for="usuario">
            <span>Usuario</span>
            <input type="text" id="usuario" value="Pepe">
        </label>
        <label for="password">
            <span>Contraseña</span>
            <input type="password" id="password" value="123123">
        </label>
        <label for="email">
            <span>Email</span>
            <input type="email" id="email" value="pepe@gmail.com">
        </label>
        <label for="telefono">
            <span>Telefono</span>
            <input type="number" id="telefono" maxlength="12">
        </label>
        <label for="direccion">
            <span>Direccion</span>
            <input type="text" id="direccion" maxlength="50">
        </label>
        <label for="provincia">
            <span>Provincia</span>
            <input type="text" id="provincia" maxlength="50">
        </label>
        <label for="localidad">
            <span>Localidad</span>
            <input type="text" id="localidad" maxlength="50">
        </label>
        <label for="pais">
            <span>Pais</span>
            <input type="text" id="pais" maxlength="50">
        </label>
        <label for="cp">
            <span>CP</span>
            <input type="number" id="cp" maxlength="5">
        </label>
        <div id="acciones">
            <input type="button" id="updatePerfil" value="Actualizar Datos"> <!--color verde-->
            <input type="button" id="deletePerfil" value="Eliminar Perfil"> <!--color rojo-->
        </div>
    </form>
</div>
    <footer>
    <div id="licencia">
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a>
        <p>Esta obra está bajo una
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"> Licencia Creative Commons Atribución 4.0 Internacional</a></p>
    </div>
    <div id="w3">
        <img src="./MEDIA/ICONOS/valid-html40.png" alt="HTML valid"/>
        <img src="./MEDIA/ICONOS/valid-css2.png" alt="CSS valid"/>
    </div>
</footer>
<script src="./editarPerfil.js"></script>
</body>
</html>