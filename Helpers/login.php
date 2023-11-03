<?php

class Login
{
    private $conexion;
    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public static function Identifica(string $username,string $password)
    {

    }

    public static function userExiste(string $username,string $password)
    {
        
    }


    public static function estaLogeado()
    {
        
    }
}

?>