<?php

class ViaWeb extends Contrato{
    private $descuento;
    

public function __construct($inicio,$vencimiento,$plancito,$state,$cash,$renueva,$persona,$discount){
    parent::__construct ($inicio,$vencimiento,$plancito,$state,$cash,$renueva,$persona);
    $this->descuento = $discount;
   

}
    

    public function getDescuento(){
        return $this->descuento;
    }

    public function setDescuento($discount){
        $this->descuento = $discount;
    }

   
    public function __toString()
    {
        $info = "";
        $info .= parent::__toString();
        $info .= "
        DESCUENTO:
        ";
        return $info;
    }

    /* Si se trata de un contrato realizado via web al importe del mismo se le aplica 
    un porcentaje de descuento que por defecto es del 10%. */

    public function calcularImporte(){
        $costo = parent::calcularImporte();
        $this->getDescuento();
        $importe = $costo - (($costo*10)/100);
        return $importe;
        
    }
    
    
}