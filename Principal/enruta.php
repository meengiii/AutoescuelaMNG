<?php

if (isset($_GET['menu']))
{
    if ($_GET['menu'] == "inicio")
    {
        require_once "index.php";
    }

    if ($_GET['menu'] == "login")
    {
        require_once "index.php";
    }

    if ($_GET['menu'] == "cerrarsesion")
    {
        require_once "index.php";
    }

    if ($_GET['menu'] == "mantenimiento")
    {
        require_once "index.php";
    }
}

?>