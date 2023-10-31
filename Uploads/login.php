<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    require_once "../funciones/funcionesLogin.php";

    login();
    
    ?>


    <H1>LOGIN</H1>
    <form name="formulario" action="login.php" method="post">
        <input type="text" placeholder="USER" name="user"><br><br>
        <input type="text" placeholder="PASSWORD" name="pass"><br><br>
        <input type="submit" value="Iniciar Sesion" name="siguiente"><br><br>
        <a href="registro.php">Registrate aqui</a>
    </form>
    
</body>
</html>