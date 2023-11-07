<?php
class DB
{

    private static $conexion = null;
    public static function abreConexion()
    {
        if (self::$conexion === null) {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=autoescuelaBD', 'mengi', '1234');
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
            }
        }
        return $conexion;
    }
}
?>