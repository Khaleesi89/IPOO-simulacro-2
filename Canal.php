<?php

/*
De los canales se conoce el tipo de canal, importe y si es HD o no. Algunos ejemplos de tipos de canal son:
noticias, interés general, musical, deportivo, películas, educativo, infantil, educativo infantil, aventura. */

class Canal{
    private $tipoCanal;
    private $importe;
    private $hdOno;



    public function __construct($tipoCanales,$cash,$hd){
        $this->tipoCanal = $tipoCanales;
        $this->importe = $cash;
        $this->hdOno = $hd;
        
    }


    public function getTipoCanal(){
        return $this->tipoCanal;
    }

    public function setTipoCanal($tipoCanales){
        $this->tipoCanal = $tipoCanales;
    }

    public function getImporte(){
        return $this->importe;
    }

    public function setImporte($cash){
        $this->importe = $cash;
    }

    public function getHdOno(){
        return $this->hdOno;
    }

    public function setHdOno($hd){
        $this->hdOno = $hd;
    }

    public function __toString()
    {
        $info= "
        ************
        TIPO DE CANAL: {$this->getTipoCanal()}
        IMPORTE: {$this->getImporte()}
        HD O NO: {$this->getHdOno()}
        ************
        ";
        return $info;
    }
    
}