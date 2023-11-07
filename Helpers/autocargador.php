<?php
function autocargador($class)
{
    $dirs = [
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Clases/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/DataBase/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Funciones/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Helpers/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Interfaces/vistas/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Repositorio/',
        $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Uploads/'
    ];

    // Reemplaza los espacios de nombres con barras diagonales
    $class = str_replace('\\', '/', $class);

    foreach ($dirs as $dir) {
        $file = $dir . $class . '.php';

        // Si el archivo de clase existe, lo incluye y sale del bucle
        if (file_exists($file)) 
        {
            include $file;
            return;
        }
    }
}

spl_autoload_register('autocargador');

?>