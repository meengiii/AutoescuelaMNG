<?php

class Intentos
{
    private $idIntentos;
    private $user_idUser;
    private $examen_idExamen;
    private $jsonRespuesta;

    public function __construct($idIntentos, $user_idUser, $examen_idExamen, $jsonRespuesta)
    {
        $this->idIntentos = $idIntentos;
        $this->user_idUser = $user_idUser;
        $this->examen_idExamen = $examen_idExamen;
        $this->jsonRespuesta = $jsonRespuesta;
    }

    public function getIdIntentos()
    {
        return $this->idIntentos;
    }

    public function setIdIntentos($idIntentos)
    {
        $this->idIntentos = $idIntentos;
    }

    public function getUserIdUser()
    {
        return $this->user_idUser;
    }

    public function setUserIdUser($user_idUser)
    {
        $this->user_idUser = $user_idUser;
    }

    public function getExamenIdExamen()
    {
        return $this->examen_idExamen;
    }

    public function setExamenIdExamen($examen_idExamen)
    {
        $this->examen_idExamen = $examen_idExamen;
    }

    public function getJsonRespuesta()
    {
        return $this->jsonRespuesta;
    }

    public function setJsonRespuesta($jsonRespuesta)
    {
        $this->jsonRespuesta = $jsonRespuesta;
    }
}



?>