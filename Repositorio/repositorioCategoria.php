<?php
class CategoriaRepository{
    private $conexion = db::abreConexion;

    //CREAR
    public function createCategoria($idCategoria,$nombre){
        $query="INSERT INTO CATEGORIA (idCategoria,nombre) VALUES (:idCategoria,:nombre)";
        $stmt=$this->conexion->prepare($query);
        $stmt->bindParam(":idCategoria", $idCategoria, PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->execute();

    }
        
    //BORRAR
    public function deleteCategoria($idCategoria){
        $query= "DELETE FROM CATEGORIA WHERE IDCATEGORIA=:idCategoria";
        $stmt=$this->conexion->prepare($query);
        $stmt->bindParam(":idCategoria", $idCategoria, PDO::PARAM_INT);
        $stmt->execute();
    }

    //UPDATE
    // public function updateCategoria($idCategoria){}

    //LEER
    public function readCategoria($idCategoria){
        $query= "SELECT * FROM CATEGORIA WHERE IDCATEGORIA=:idCategoria";
        $stmt=$this->conexion->prepare($query);
        $stmt->bindParam(":idCategoria", $idCategoria, PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>