<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/AutoescuelaMNG/Repositorio/repositorioUser.php';
class Login
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }
    //funcion que inicia sesion del usuario
    public function user_login($nombre, $pass)
    {
        $repositorio = new UserRepository($this->conexion);
        $userData = $repositorio->encuentra($nombre);


        if ($userData) 
        {
            Sesion::login_sesion($userData);
            return true;
        } else {
            // Credenciales incorrectas
            return false;
        }
    }

    //funcion que cierra la sesion del usuario
    public function user_logout()
    {

    }
}
?>