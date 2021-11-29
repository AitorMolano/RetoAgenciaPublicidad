<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <?php
        include "head.meta.php";
    ?>
    <script src="jquery-3.5.1.js"></script>
    <script src="verProductos.js"></script>
</head>
<header>
    <?php
        include "header.view.php";
    ?>
</header>
<body>
<div id="contenido">
    <h1 id="titulo">Busqueda avanzanda</h1>
    <form action="verProducto.php" method="GET">
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
    <legend><h2>Catalogo de productos</h2></legend>
    <div id="detalles">
    <div id="contenedor">
    <div>
        <p>Nombre</p>
        <p>Descripcion</p>
        <p>Precio</p>
        <p>Fecha Publicacion</p>
        <p>Nombre Vendedor</p>
        <p>Categoria</p>
    </div>
    <div id="resultado">
        <p>Radiador</p>
        <p>Radiador reshulon</p>
        <p>69.99</p>
        <p>2021-11-07</p>
        <p>pepe</p>
        <p>Casa y jardin</p>
    </div>
    </div>
</div>
    </fieldset>
    <?php 
            include "../verFormulario/EnviarFormulario.php"
        ?>
</div>   
</body>
<footer>
    <?php
        include "footer.view.php";
    ?>
</footer>
</html>

