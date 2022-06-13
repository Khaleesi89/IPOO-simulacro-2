<?php


//tiene todos los parametros heredados de contrato

class Oficina extends Contrato{




    public function __construct($inicio,$vencimiento,$plancito,$state,$cash,$renueva,$persona){
        parent::__construct($inicio,$vencimiento,$plancito,$state,$cash,$renueva,$persona);
        
    }

    public function __toString()
    {
        $info= parent::__toString();
        return $info;
    }

    /*El importe final de un contrato realizado en la empresa se calcula sobre el importe del plan mas los
    importes parciales de cada uno de los canales que lo forman.*/

    public function calcularImporte(){
        $costo = parent::calcularImporte();
        $plan = $this->getPlan();
        $canales = $plan->getcoleCanales();
        $salida = true;
        $count = count($canales);
        $a=0;
        $contador = 0;
        while( $salida && $a < $count){
            $importe  = $canales->getImporte();
            $contador += $importe; 
            $a++;
        }
        $total = $costo + $contador;
        return $total;

    }

    
}