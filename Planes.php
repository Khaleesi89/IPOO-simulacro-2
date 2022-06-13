<?php

class Planes{
    private $codigo;
    private $coleCanales = [];
    private $importe;
    private $megas;


    public function __construct($id,$canal,$cash,$mg){
        $this->codigo = $id;
        $this->coleCanales = $canal;
        $this->importe = $cash;
        $this->megas = $mg;
        
    }


    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($id){
        $this->codigo = $id;
    }

    public function getcoleCanales(){
        return $this->coleCanales;
    }

    public function setcoleCanales($canal){
        $this->coleCanales = $canal;
    }

    public function getImporte(){
        return $this->importe;
    }

    public function setImporte($cash){
        $this->importe = $cash;
    }

    public function getMegas(){
        return $this->megas;
    }

    public function setMegas($mg){
        $this->megas = $mg;
    }


    public function __toString(){
        $array = $this->getcoleCanales();
        $str = $this->mostrarCanales($array);
        $info = "
        *************************        
        CODIGO DEL PLAN: {$this->getCodigo()}
        CANAL: {$str}
        IMPORTE: {$this->getImporte()}
        MEGAS:  {$this->getMegas()}
        *************************
        ";
        return $info;
    }


    //mostrar coleccion de canales

    public function mostrarCanales($array){
        $stringObj = "";
        foreach ($array as $key) {
           
            $stringObj = " " .$key;
        }
        return $stringObj;
    }
    
    
    
}