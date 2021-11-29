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
    <title>LoVendo! - Tienda</title>
</head>
<script src="verProductos.js"></script>
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
<div id="contenido">
    <h1 id="titulo">Busqueda avanzanda</h1>
    <form>
        <div class="container-1">
            <input type="text" id="busqueda" name="producto" placeholder="Search...">
            <input type="submit" id="bBuscar" value="Buscar">
        </div>
        <div id="filtrados">
            <label>Categoria</label>
                <select name="categoria">
                    <option value="">...</option>
                    <option value="1">Moviles y telefonia</option>
                    <option value="2">Casa y jardin</option>
                    <option value="3">Informatica</option>
                    <option value="4">Imagen y sonido</option>
                    <option value="5">Mascotas</option>
                    <option value="6">Motor</option>
                    <option value="7">Caza y pesca</option>
                    <option value="8">Deportes</option>
                    <option value="9">Juegos</option>
                    <option value="10">Moda y complementos</option>
                    <option value="11">Aficiones y ocio</option>
                </select>
            <label>Precio</label>
                <select name="precio">
                    <option value="">...</option>
                    <option value="menos100">Menos de 100</option>
                    <option value="entre100-300">Entre 100 y 300</option>
                    <option value="mas300">Mas de 300</option>
                </select>
            <label>Provincia</label>
                <select name="provincia">
                    <option value="">...</option>
                    <option value="alava">Alava</option>
                </select>
            <br>
            <div id="tipoOrdenar">
            <div>
                <input type="radio" name="ordenar" value="fechdescendente" id="circulo"><label id="texto">Anuncio mas reciente</label>
                <input type="radio" name="ordenar" value="fechascendente"  id="circulo"><label id="texto">Anuncio mas antiguo</label>
            </div>
            <div>
                <input type="radio" name="ordenar" value="preciodescendente"  id="circulo"><label id="texto">Precio mas barato</label>
                <input type="radio" name="ordenar" value="precioascendente"  id="circulo"><label id="texto">Precio mas caro</label>
            </div>
            </div> 
        </div>   
    </form>
    <fieldset>
    <legend><h1>Catalogo de productos</h1></legend>
    <div id="contAnuncios">
        <div id="producto"><p>Nombre: Radiador</p><p>Precio: 69.99€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Ordenador portatil mac nuevo</p><p>Precio: 450€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Camara Canon 450L</p><p>Precio: 300€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: FIFA 2008</p><p>Precio: 80€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Xiaomi redmi x5</p><p>Precio: 120€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Vestido Breska</p><p>Precio: 20€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Bici mountain bike</p><p>Precio: 70€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Regalo gato</p><p>Precio: 1€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Pelicula spiderman vs aliens</p><p>Precio: 20€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Guardabarro ibiza 2000</p><p>Precio: 100€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Anzuelos buenos</p><p>Precio: 15€</p><a href="verDetalles.php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
        <div id="producto"><p>Nombre: Iphone X</p><p>Precio: 999€</p><a href="verDetalles..php">Ver mas</a><div id="cambiarIcono"><i class="far fa-heart fav sinMarcar"></i></div></div>
    </div>
    </fieldset>
</div>   
</body>
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
</html>