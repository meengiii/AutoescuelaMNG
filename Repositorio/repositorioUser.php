<?php
class UserRepository
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    //CREAR
    public function createUser($nombre, $password)
    {
        $query = "INSERT INTO USER (nombre,password) values (:nombre,:password)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        // $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);
        $stmt->execute();
        header("Location:?menu=login");

    }
    //BORRAR
    public function deleteUser($id)
    {
        $query = "DELETE FROM USER WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    //UPDATE
    public function updateUser($id, $nombre, $password, $rol)
    {
        //hay que hacer un if con isset para cada post vaya comparando con su atributo y añadir por parametro solo pasar el objeto usuario
        $query = "UPDATE USER SET NOMBRE=:nombre,PASSWORD=:password,ROL=:rol WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    //LEER
    public function leerUser($id)
    {
        $query = "SELECT * FROM USER WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    public function encuentra($nombre, $pass)
    {
        $query = "SELECT idUser, nombre, password,rol FROM USER WHERE nombre = :nombre and password=:pass";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":pass", $pass, PDO::PARAM_STR);
        $stmt->execute();

        $userData= $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData != null)
        {
            $user = new User($stmt["idUser"], $stmt["nombre"],$stmt["password"],$stmt["rol"]);
            return $user;
        }else{
            return null;
        }
    }

}
?>