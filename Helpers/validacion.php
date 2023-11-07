<?php
class Validator
{
    //Array de errores
    private $errores;

    //Constructor
    public function __construct()
    {
        $this->errores=array();
    }
    public function Requerido($campo)
    {
        if(!isset($_POST[$campo]) || empty($_POST[$campo]))
        {
            $this->errores[$campo]="El campo $campo no puede estar vacio";
            return false;
        }
        return true;
    }

    //funcion que valida un email
    public function validaEmail($email)
    {
    }
    //funcion que valida el rango de edad valido
    public function validaEdad($clave, $valor, $min, $max)
    {
    }
    //funcion que comprueba si hay errores
    public function hayErrores()
    {
    }
    //funcion que devuelve un array de errores
    public function getErrores(){

    }

    //por comentar
    public function getValor($campo)
    {
        return
        isset($_POST[$campo])?$_POST[$campo]:'';
    }

    public function getSelected($campo,$valor)
    {
        return
        isset($_POST[$campo]) && $_POST[$campo]==$valor?'selected':'';
    }

    public function getChecked($campo,$valor)
    {
        return
        isset($_POST[$campo]) && $_POST[$campo]==$valor?'checked':'';
    }
    //----

    //cuenta los errores del array
    public function ValidacionPasada()
    {
        if(count($this->errores)!=0)
        {
            return false;
        }
        return true;
    }
    //imprime los errores segun el campo
    public function ImprimirError($campo)
    {
        return
        isset($this->errores[$campo])?'<span class="error_mensaje">'.$this->errores[$campo].'</span>':'';
    }

}
?>