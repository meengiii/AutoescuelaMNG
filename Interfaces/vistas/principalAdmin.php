<?php
    

    Session::iniciar_sesion();
    $user = Session::leer_sesion("usuario");
    $nombre = $user->getNombre();

    if (isset($_POST['menu']) && $_POST['menu'] === 'login') 
    {
        // Cerrar la sesión y redirigir al usuario a la página de inicio
        Session::cerrar_session();
        header('Location: inicio.php');
        exit();
    }

    if (!Session::leer_sesion("usuario"))
    {
        Session::cerrar_session();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="http://virtual.localfj.com/interfaces/estilos/estilosPrinAdmin.css">
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
                <li><a href="?menu=login">Cerrar Sesión</a></li>
            </ul>
        </div>
        <div id="enlaces">
            <a href="#">Crear Test</a>
            <a href="#">Asignar Rol a usuario</a>
            <a href="#">Modificar Usuario</a>
            <a href="#">Modificar Profesor</a>
        </div>
    </div>
    <script src="http://virtual.localfj.com/interfaces/js/despegable.js"></script>
</body>
</html>
