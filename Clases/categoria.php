<?php

class Categoria
{
    private $idCategoria;
    private $nombre;

    public function __construct($idCategoria, $nombre)
    {
        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
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