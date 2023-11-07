<?php

    
    if (!isset($_GET['menu'])) 
    {
        $_GET['menu'] = "login";
    }

    if (isset($_GET['menu'])) 
    {
        if ($_GET['menu'] == "inicio") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/index.php';
        }

        if ($_GET['menu'] == "login") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/identificacion.php';
        }

        if ($_GET['menu'] == "registro") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/registro.php';
        }

        if ($_GET['menu'] == "olvido") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/olvido.php';
        }

        if ($_GET['menu'] == "homeAlu") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/principalAlumno.php';
        }

        if ($_GET['menu'] == "homeAdmin") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/principalAdmin.php';
        }

        if ($_GET['menu'] == "homeProf") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/principalProfesor.php';
        }

        if ($_GET['menu'] == "examen") 
        {
            require_once $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/examen.php';
        }
        
    }
?>
