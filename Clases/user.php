<?php

class User
{
    private $idUser;
    private $nombre;
    private $pass;
    private $rol;

    public function __construct($idUser, $nombre, $pass, $rol)
    {
        $this->idUser = $idUser;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->rol = $rol;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function greet()
    {
        return "Hola, soy {$this->nombre} (ID: {$this->idUser}).";
    }
}


?>