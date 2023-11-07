<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://virtual.localmengi.com/AutoescuelaMNG/Interfaces/Estilos/registro.css">
    <title>Registro de Usuario</title>
</head>

<body>
    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Helpers/autocargador.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/AutoescuelaMNG/DateBase/db.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/AutoescuelaMNG/Repositorio/repositorioUser.php';

    if (isset($_POST['registro'])) {
        $conn = db::abreConexion();
        $userRepository = new UserRepository($conn);
        if (!empty($_POST['newUser']) && !empty($_POST['newPw'])) {
            $userRepository->createUser($_POST['newUser'], md5($_POST['newPw']));
        }
    }
    ?>


    <div class="contenedor">
        <form enctype="multipart/form-data" method="post">
            <h2>Registro de Usuario</h2>
            <div class="grupo-imput">
                <label for="username">Usuario</label>
                <p><input type="text" name="newUser" placeholder="Nombre"></p>
            </div>
            <div class="grupo-imput">
                <label for="password">Contraseña</label>
                <p><input type="password" name="newPw" placeholder="Contraseña"></p>
            </div>
            <div class="botones">
                <p id="regis"><input type="submit" name="registro" value="Registrarse" class="registro"></p>
            </div>
            <p><a href="index.php?menu=login">¿Ya tienes cuenta?</a></p>
        </form>
    </div>
    
</body>

</html>