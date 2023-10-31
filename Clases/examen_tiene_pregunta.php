<?php

class ExamenTienePregunta
{
    private $examen_idExamen;
    private $pregunta_idPregunta;

    public function __construct($examen_idExamen, $pregunta_idPregunta)
    {
        $this->examen_idExamen = $examen_idExamen;
        $this->pregunta_idPregunta = $pregunta_idPregunta;
    }

    public function getExamenIdExamen()
    {
        return $this->examen_idExamen;
    }

    public function setExamenIdExamen($examen_idExamen)
    {
        $this->examen_idExamen = $examen_idExamen;
    }

    public function getPreguntaIdPregunta()
    {
        return $this->pregunta_idPregunta;
    }

    public function setPreguntaIdPregunta($pregunta_idPregunta)
    {
        $this->pregunta_idPregunta = $pregunta_idPregunta;
    }
}


?>
