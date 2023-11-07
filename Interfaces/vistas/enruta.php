<?php
    if (!isset($_GET['menu'])) 
    {
        $_GET['menu'] = "login";
    }

    if (isset($_GET['menu'])) 
    {
        if ($_GET['menu'] == "inicio") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/index.php';
        }

        if ($_GET['menu'] == "login") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/identificacion.php';
        }

        if ($_GET['menu'] == "registro") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/registro.php';
        }

        if ($_GET['menu'] == "olvido") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/olvido.php';
        }

        if ($_GET['menu'] == "homeAlu") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/principalAlumno.php';
        }

        if ($_GET['menu'] == "homeAdmin") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/principalAdmin.php';
        }

        if ($_GET['menu'] == "homeProf") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/principalProfesor.php';
        }
        
        if ($_GET['menu'] == "prueba") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/formulario.php';
        }
    }
?>
