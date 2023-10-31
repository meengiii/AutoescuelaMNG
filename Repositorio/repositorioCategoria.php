<?php

class RepositorioCategoria
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function crearCategoria($nombre)
    {
        $stmt = $this->conexion->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $stmt->bind_param("s", $nombre);

        if ($stmt->execute()) {
            return true; // Éxito al crear la categoría
        } else {
            return false; // Error al crear la categoría
        }
    }

    public function actualizarCategoria($idCategoria, $nombre)
    {
        $stmt = $this->conexion->prepare("UPDATE categorias SET nombre = ? WHERE idCategoria = ?");
        $stmt->bind_param("si", $nombre, $idCategoria);

        if ($stmt->execute()) {
            return true; // Éxito al actualizar la categoría
        } else {
            return false; // Error al actualizar la categoría
        }
    }

    public function borrarCategoria($idCategoria)
    {
        $stmt = $this->conexion->prepare("DELETE FROM categorias WHERE idCategoria = ?");
        $stmt->bind_param("i", $idCategoria);

        if ($stmt->execute()) {
            return true; // Éxito al borrar la categoría
        } else {
            return false; // Error al borrar la categoría
        }
    }
}

?>