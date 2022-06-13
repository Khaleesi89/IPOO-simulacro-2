<?php

/*
Los contratos tienen la fecha de inicio, la fecha de vencimiento, el plan, un
estado (al día, moroso, suspendido), un costo, si se renueva o no y una referencia al cliente que adquirió el
contrato. */

class Contrato{
    private $fechaInicio;
    private $fechaVencimiento;
    private $plan;
    private $estado;
    private $costo;
    private $seRenuevaOno;
    private $cliente;


    public function __construct($inicio,$vencimiento,$plancito,$state,$cash,$renueva,$persona){
        $this->fechaInicio = $inicio;
        $this->fechaVencimiento = $vencimiento;
        $this->plan = $plancito;
        $this->estado = $state;
        $this->costo = $cash;
        $this->seRenuevaOno = $renueva;
        $this->cliente = $persona;
        
    }

    

    public function getFechaInicio(){
        return $this->fechaInicio;
    }

    public function setFechaInicio($inicio){
        $this->fechaInicio = $inicio;
    }

    public function getFechaVencimiento(){
        return $this->fechaVencimiento;
    }

    public function setFechaVencimiento($vencimiento){
        $this->fechaVencimiento = $vencimiento;
    }

    public function getPlan(){
        return $this->plan;
    }

    public function setPlan($plancito){
        $this->plan = $plancito;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($state){
        $this->estado = $state;
    }

    public function getCosto(){
        return $this->costo;
    }

    public function setCosto($cash){
        $this->costo = $cash;
    }

    public function getSeRenuevaOno(){
        return $this->seRenuevaOno;
    }

    public function setSeRenuevaOno($renueva){
        $this->seRenuevaOno = $renueva;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente($persona){
        $this->cliente = $persona;
    }

    public function __toString()
    {
        $info = "
        *******************
        CONTRATO
        *******************
        FECHA DE INICIO: {$this->getFechaInicio()}
        FECHA DE VENCIMIENTO: {$this->getFechaVencimiento()}
        PLAN: {$this-> getPlan()}
        ESTADO: {$this->getEstado()}
        COSTO: {$this->getCosto()}
        RENUEVA O NO: {$this->getSeRenuevaOno()}
        CLIENTE: {$this->getCliente()};
        *******************
        ";
        return $info;
    }



    /*Un contrato se considera en estado moroso cuando su fecha de vencimiento ha sido superada,
     en caso de que pasen 10 días al vencimiento el estado cambiará de moroso a suspendido; 
     caso contrario el contrato se encuentra al día. */

     //VERIFICA LAS FECHAS DE HOY Y LA DEL VENCIMIENTO Y CAMBIA LOS ESTADOS

     public function actualizarEstadoContrato($contrato,$fechaHoy){
         $numero = $contrato->diasContratoVencido($contrato,$fechaHoy);
         if($numero < 10){
             $this->setEstado("MOROSO");
         }if ($numero > 10){
            $this->setEstado("SUSPENDIDO");
         } else {
            $this->setEstado("AL DIA");
         }
                 

     }

     /*En la clase contrato implementar el método actualizarEstadoContrato: que actualiza el estado del
     contrato según corresponda según lo descripto. (Utilizar el método diasContratoVencido )*/

     public function diasContratoVencido($contrato,$fechaHoy){
        $vencimiento = $contrato->getFechaVencimiento();
        $fecha1 = new DateTime($fechaHoy);
        $fecha2 = new DateTime($vencimiento);
        $diferencias  = $fecha1->diff($fecha2);
        $dias = $diferencias->days;
        $numero = intval($dias);
        return $numero;
     }
     

     /*Implementar y redefinir el método calcularImporte que retorna el importe final correspondiente al
        importe del contrato. 
        Cuando un cliente paga su contrato hay que analizar el estado del mismo. Si el contrato esta al día, se renovará
        por un mes mas abonando el importe pactado. Si el contrato está en estado moroso, se cobrará una multa que
        sera un incremento del 10% del valor pactado por la cantidad de días en mora, además su estado se actualizará
        al valor al día y se renovará. Finalmente si el estado del contrato es suspendido se cobrará la misma multa de un
        contrato moroso pero no se permitirá su renovación.*/


        
        public function calcularImporte(){
            $importe = $this->getCosto();
            return $importe;

        }
}