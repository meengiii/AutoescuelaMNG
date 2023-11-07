<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="http://virtual.localmengi.com/autoescuelaMNG/interfaces/estilos/estilosPrinAdmin.css">
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
                <li><a href="#">Bienvenido</a></li>
                <li><a href="index.php?menu=login">Cerrar Sesión</a></li>
            </ul>
        </div>
        <div id="enlaces">
            <a href="#">Crear Test</a>
            <a href="#">Asignar Rol a usuario</a>
            <a href="#">Modificar Usuario</a>
            <a href="#">Modificar Profesor</a>
        </div>
    </div>
    <script src="http://virtual.localmengi.com/autoescuelaMNG/interfaces/js/despegable.js"></script>
</body>
</html>