<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./MEDIA/ICONOS/favicon.png" type="image">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Lovendo - Registro</title>
</head>

<body>

     <div id="contRegistro">
        <form id="registro">
            <label for="email">
                <span>Email</span>
                <input type="email" id="email" required>
            </label>
            <label for="usuario">
                <span>Nombre usuario</span>
                <input type="text" id="usuario" maxlenght="50" required>
            </label>
            <label for="password">
                <span>Contraseña</span>
                <input type="password" id="password" maxlenght="50" required>
            </label>
            <label for="confPassword">
                <span>Repetir Contraseña</span>
                <input type="password" id="confPassword" required>
            </label>
            <input type="button" id="bRegistrarse" value="Registrate">
        <form>
    </div>
    
    <script src="./registrarse.js"></script>


</body>
</html>