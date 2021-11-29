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
    <title>LoVendo! - Nuevo Anuncio</title>
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
        <a href="#"><div id="perfil">
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
<div id="crearAnuncio">
        <h1>Crear Anuncio</h1>
        <form id="formularioAnuncio">
            <input type="text" name="titulo" id="tituloAnuncio"placeholder="Titulo*" />
            <textarea cols="30" rows="10" name="descripcion" id="descAnuncio" placeholder="Descripcion*"></textarea>
            <input type="text" name="precio" id="precioAnuncio" placeholder="Precio*">
            <select name="selectCat" id="selCategorias" required>
                <option value="01" selected>Seleccione una categoria*</option>
                <option value="">Casa y Jardin</option>
                <option value="">Informatica</option>
                <option value="">Imagen y sonido</option>
                <option value="">Juegos</option>
                <option value="">Moviles y telefonia</option>
                <option value="">Moda y complementos</option>
                <option value="">Deportes</option>
                <option value="">Mascotas</option>
                <option value="">Aficiones y Ocio</option>
                <option value="">Motor</option>
                <option value="">Caza y Pesca</option>
            </select>
            <input type="file" id="fotoAnuncio" name="imagen"/>
            </form>
            <label>¿Quieres publicar este anuncio?</label><br>
            <input type="button" value="Publicar" id="botonPublicar"/>
            <input type="button" value="Cancelar" id="botonCancel"/> <br>
            <label>Los campos marcados con * son obligatorios</label>
        
    </div> 
<footer>
    <div id="licencia">
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a>
        <p>Esta obra está bajo una
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"> Licencia Creative Commons Atribución 4.0 Internacional</a></p>
    </div>
    <div id="w3">
        <img src="./Media/iconos/valid-html40.png" alt="HTML valid"/>
        <img src="./Media/iconos/valid-css2.png" alt="CSS valid"/>
    </div>
</footer>
<script src="anuncio.js"></script>
</body>
</html>