<?php

class Examen
{
    private $idExamen;
    private $fechaExamen;
    private $user_idUser;

    public function __construct($idExamen, $fechaExamen,$user_idUser)
    {
        $this->idExamen = $idExamen;
        $this->fechaExamen = $fechaExamen;
        $this->user_idUser = $user_idUser;
    }

    public function getIdExamen()
    {
        return $this->idExamen;
    }

    public function setIdExamen($idExamen)
    {
        $this->idExamen = $idExamen;
    }

    public function getFechaExamen()
    {
        return $this->fechaExamen;
    }

    public function setFechaExamen($fechaExamen)
    {
        $this->fechaExamen = $fechaExamen;
    }
    public function getUser_idUser()
    {
        return $this->user_idUser;
    }


    public function setUser_idUser($user_idUser)
    {
        $this->user_idUser = $user_idUser;

        return $this;
    }
}


?>