<?php
class Principal
{
    public static function main()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "/Helpers/autocargador.php";
        require_once $_SERVER["DOCUMENT_ROOT"] . "/Interfaces/vistas/enruta.php";
    }
}
Principal::main();