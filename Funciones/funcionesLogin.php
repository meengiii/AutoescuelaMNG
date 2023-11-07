<?php

require_once  "../AutoescuelaMNG/Uploads/session.php";
require_once "../AutoescuelaMNG/Clases/user.php";
function login()
{
    if (isset($_POST['siguiente'])) {
        $nombre = $_POST['user'];
        $contraseña = $_POST['pass'];
        $fichero = 'user.csv';
        $ficherologin = 'login.csv';
        $actual = file_get_contents($fichero);
        $arr = explode("\n", $actual);


        // Recorre las líneas del archivo
        foreach ($arr as $key => $v) 
        {
            $datos = explode(";", $v);
            if ($datos[0] == $nombre && $datos[1] == $contraseña) 
            {
                $user = new User ($datos[0],$datos[1],$datos[2]);
                agrega($nombre, $ficherologin);
                loginSesion($user);
                header("Location: http://localhost/FormularioBIG/Formulario.php");
                exit;
            }
        }
        echo "El usuario o contraseña son incorrectos";
    }
}
function agrega($nombre, $ficherologin)
{
    $linea = $nombre . "\n";
    file_put_contents($ficherologin, $linea);
}



function logout($user)
{
    if (isset($_POST['logout'])) 
    {
        $fichero = "login.csv";
        $actual = file_get_contents($fichero);
        $arr = explode("\n", $actual);

        foreach ($arr as $key => $v) 
        {
            $datos = explode(";", $v);
            if ($datos[1    ]==$user)
             {
                unset($arr[$key]);
                cierraSesion(); 
            }

        }
        $nuevo = implode("\n", $arr);
        file_put_contents($fichero,$nuevo);
    }
}



?>