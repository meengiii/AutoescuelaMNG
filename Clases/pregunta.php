<?php

class Pregunta
{
    private $idPregunta;
    private $enunciado;
    private $res1;
    private $res2;
    private $res3;
    private $resCorrecta;
    private $dificultadPre;
    private $categoriaPre;

    public function __construct($idPregunta, $enunciado, $res1, $res2, $res3, $resCorrecta, $url, $tipoURL)
    {
        $this->idPregunta = $idPregunta;
        $this->enunciado = $enunciado;
        $this->res1 = $res1;
        $this->res2 = $res2;
        $this->res3 = $res3;
        $this->resCorrecta = $resCorrecta;
        $this->url = $url;
        $this->tipoURL = $tipoURL;
    }

    public function getIdPregunta()
    {
        return $this->idPregunta;
    }

    public function setIdPregunta($idPregunta)
    {
        $this->idPregunta = $idPregunta;
    }

    public function getEnunciado()
    {
        return $this->enunciado;
    }

    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;
    }

    public function getRes1()
    {
        return $this->res1;
    }

    public function setRes1($res1)
    {
        $this->res1 = $res1;
    }

    public function getRes2()
    {
        return $this->res2;
    }

    public function setRes2($res2)
    {
        $this->res2 = $res2;
    }

    public function getRes3()
    {
        return $this->res3;
    }

    public function setRes3($res3)
    {
        $this->res3 = $res3;
    }

    public function getResCorrecta()
    {
        return $this->resCorrecta;
    }

    public function setResCorrecta($resCorrecta)
    {
        $this->resCorrecta = $resCorrecta;
    }

    public function getDificultadPre()
    {
        return $this->dificultadPre;
    }

    public function setDificultadPre($dificultadPre)
    {
        $this->dificultadPre = $dificultadPre;
    }

    public function getCategoriaPre()
    {
        return $this->categoriaPre;
    }

    public function setCategoriaPre($categoriaPre)
    {
        $this->categoriaPre = $categoriaPre;
    }
}



?>