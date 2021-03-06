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
    <div id="contMain">
        <div id="carruselPubli">
            <ul id="listaPubli">
                <li><p>Encuentra lo que quieras!</p></li>
                <li><i class="fas fa-arrows-alt-v"></i><p>Compra más barato</p></li>
                <li><i class="fas fa-arrows-alt-v"></i><p>Reutiliza</p></li>

                <li><i class="fas fa-arrows-alt-v"></i><p>Vende lo que no usas,</p></li>
                <li><i class="fas fa-arrows-alt-v"></i><p>Gana dinero</p></li>
                <li><i class="fas fa-arrows-alt-v"></i><p>Transacciones seguras</p></li>
            </ul>
        </div>
        <div id="categoriasInx">
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

    <div id="info">
        <div id="fotoInfo">
            <img src="./MEDIA/IMAGENES/fotoEjemplo.jpg" alt="Información">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur recusandae ut voluptates nostrum similique voluptatibus architecto consequuntur eveniet qui sit suscipit, quis enim sequi praesentium ea nihil, quos maiores.</p>
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
<script src="principal.js"></script>
</body>
</html>