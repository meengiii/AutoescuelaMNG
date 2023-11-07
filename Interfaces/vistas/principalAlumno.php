<?php

    require_once $_SERVER["DOCUMENT_ROOT"]."/AutoescuelaMNG/Helpers/autocargador.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/AutoescuelaMNG/Helpers/session.php";

    Sesion::iniciar_sesion();
    $user = Sesion::leer_sesion("usuario");
    var_dump($user->getNombre());
    $nombre = $user->getNombre();


    ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="http://virtual.localmengi.com/autoescuelaMNG/interfaces/estilos/estilosPrinAlu.css">
</head>
<body>

    

    <div id="contenedor">
        <div id="encabezado">
            <img id="imagenUsuario" src="http://virtual.localmengi.com/autoescuelaMNG/interfaces/imagenes/logo.PNG" alt="Imagen Izquierda">
            <h1 id="titulo">HOME</h1>
            <img id="imagenDerecha" src="http://virtual.localmengi.com/autoescuelaMNG/interfaces/imagenes/user2.webp" alt="Imagen Derecha" onclick="mostrarMenu()">
        </div>
        <div id="menuDesplegable">
            <ul>
            <li><a href="#">Bienvenido <?php echo $nombre; ?></a></li>
                <li><a href="index.php?menu=login">Cerrar Sesión</a></li>
            </ul>
        </div>
        <div id="enlaces">
            <a href="#">Hacer Examen</a>
            <a href="#">Generar Examen</a>
            <a href="#">Ver Examen</a>
        </div>
    </div>
    <script src="http://virtual.localmengi.com/autoescuelaMNG/interfaces/js/despegable.js"></script>
</body>
</html>
