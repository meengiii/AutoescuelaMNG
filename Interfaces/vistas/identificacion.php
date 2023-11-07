<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://virtual.localfj.com/Interfaces/Estilos/login.css">
</head>

<body>
    <?php
    
    

    //creamos validator
    $valida = new Validator();
    //comprobamos que se ha hecho el post de formulario
    if (isset($_POST['login'])) {
        //creamos conexion y login
        $conn = DB::abreConexion();
        $login = new login($conn);

        //validamos
        $valida->Requerido('nombre');
        $valida->Requerido('pass');
        //Comprobamos validacion
        if ($valida->ValidacionPasada()) {
            if (!empty($_POST['nombre']) && !empty($_POST['pass'])) 
            {
                if ($login->user_login($_POST['nombre'], md5($_POST['pass']))) 
                {
                    header("location:?menu=homeAlu");
                }
            }
        }
    }

    ?>

    <div class="contenedor">
    <form action="index.php" method="post">
        <h2>Autoescuela MNG</h2>
        <div class="grupo-imput">
            <label for="username">Usuario</label>
            <p><input type="text" id="username" name="nombre" placeholder="Usuario"></p>
            <?= $valida->ImprimirError('nombre') ?>
        </div>
        <div class="grupo-imput">
            <label for="password">Contraseña</label>
            <p><input type="password" name="pass" placeholder="Contraseña" id="password"></p>
            <?= $valida->ImprimirError('pass') ?>
        </div>
        <a class="olvido" href="index.php?menu=olvido">¿Olvidó su contraseña?</a>
        <div class="botones">
            <button class="registro" id="registro" ><p><a href="index.php?menu=registro" id="nuevoRegistro">No tienes cuenta? Registrarse</a></p></button>
            <p><input type="submit" name="login" value="Iniciar Sesion" id="inicioSesion"></p>
        </div>
        
    </form>
    </div>

    

    
</body>

</html>