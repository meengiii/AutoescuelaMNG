<?php

class Dificultad
{
    private $idDificultad;
    private $nombre;

    public function __construct($idDificultad, $nombre)
    {
        $this->idDificultad = $idDificultad;
        $this->nombre = $nombre;
    }

    public function getIdDificultad()
    {
        return $this->idDificultad;
    }

    public function setIdDificultad($idDificultad)
    {
        $this->idDificultad = $idDificultad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}


?>