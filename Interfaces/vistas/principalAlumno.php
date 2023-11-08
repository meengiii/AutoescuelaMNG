<?php
    
    Session::iniciar_sesion();
    $user = Session::leer_sesion("usuario");
    $nombre = $user->getNombre();


    ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="http://virtual.localfj.com/interfaces/estilos/estilosPrinAlu.css">
</head>
<body>

    

    <div id="contenedor">
        <div id="encabezado">
            <img id="imagenUsuario" src="http://virtual.localfj.com/interfaces/imagenes/logo.PNG" alt="Imagen Izquierda">
            <h1 id="titulo">HOME</h1>
            <img id="imagenDerecha" src="http://virtual.localfj.com/interfaces/imagenes/user2.webp" alt="Imagen Derecha" onclick="mostrarMenu()">
        </div>
        <div id="menuDesplegable">
            <ul>
                <li><a href="#">Bienvenido <?php echo $nombre; ?></a></li>
                <li><a href="index.php?menu=login">Cerrar Sesión</a></li>
            </ul>
        </div>
        <div id="enlaces">
            <a href="http://virtual.localfj.com/interfaces/vistas/examen.php">Hacer Examen</a>
            <a href="http://virtual.localfj.com/interfaces/vistas/generalExamen.php">Generar Examen</a>
            <a href="http://virtual.localfj.com/interfaces/vistas/examenesAlu.php">Ver Mis Examenes</a>
        </div>
    </div>
    <script src="http://virtual.localfj.com/interfaces/js/despegable.js"></script>
</body>
</html>
