<?php
function inicia_Sesion()
{
    session_start();
}
function cierraSesion()
{
    session_destroy();
}

function guardaSesion($clave,$valor)
{
    $_SESSION[$clave]=$valor;
}

function leeSesion($valor)
{
    if (isset($_SESSION[$valor])) 
    {
        return $_SESSION[$valor];
    }else{
        return null;
    }
    
}


function existeSesion($valor)
{
    return isset($_SESSION[$valor]);
}

function estaLogeado()
{
    return isset($_SESSION['nombre']);
}

function loginSesion($nombre)
{
    inicia_Sesion();
    guardaSesion('nombre',$nombre);
}

?>
