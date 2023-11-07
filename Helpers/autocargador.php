<?php
function autocargador($class)

{
    $dirs = [
        $_SERVER["DOCUMENT_ROOT"] . '/Clases/',
        $_SERVER["DOCUMENT_ROOT"] . '/DateBase/',
        $_SERVER["DOCUMENT_ROOT"] . '/Funciones/',
        $_SERVER["DOCUMENT_ROOT"] . '/Helpers/',
        $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/',
        $_SERVER["DOCUMENT_ROOT"] . '/Interfaces/vistas/',
        $_SERVER["DOCUMENT_ROOT"] . '/Repositorio/',
        $_SERVER["DOCUMENT_ROOT"] . '/Uploads/',

    ];

    // Reemplaza los espacios de nombres con barras diagonales
    $class = str_replace('\\', '/', $class);

    foreach ($dirs as $dir) {
        $file = $dir . $class . '.php';

        // Si el archivo de clase existe, lo incluye y sale del bucle
        if (file_exists($file)) 
        {
            require_once $file;
            return;
        }
    }
}

spl_autoload_register('autocargador');

?>