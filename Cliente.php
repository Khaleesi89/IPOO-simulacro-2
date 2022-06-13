<?php

class Cliente{
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $direccion;



    public function __construct($name,$apell,$docmento,$address){
        $this->nombre = $name;
        $this->apellido = $apell;
        $this->nroDocumento = $docmento;
        $this->direccion = $address;
        
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($name){
        $this->nombre = $name;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apell){
        $this->apellido = $apell;
    }

    public function getNroDocumento(){
        return $this->nroDocumento;
    }

    public function setNroDocumento($docmento){
        $this->nroDocumento = $docmento;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($address){
        $this->direccion = $address;
    }

    public function __toString()
    {
        $info = "
        ******* CLIENTE **********
        NOMBRE: {$this->getNombre()}
        APELLIDO: {$this->getApellido()}
        NRO DOCUMENNTO: {$this->getNroDocumento()}
        DIRECCION: {$this->getDireccion()}
        ****************
        ";
        return $info;
    }


    /*Antes de que un cliente realice un pago se debe verificar su estado
    Cuando un cliente paga su contrato hay que analizar el estado del mismo. 
    Si el contrato esta al día, se renovará por un mes mas abonando el importe pactado. 
    Si el contrato está en estado moroso, se cobrará una multa que sera un incremento del 10% del valor pactado por 
    la cantidad de días en mora, además su estado se actualizará al valor al día y se renovará.
     Finalmente si el estado del contrato es suspendido se cobrará la misma multa de un contrato moroso pero no se
      permitirá su renovación. */

      public function realizarPago($contrato){
          $vencimiento = date("d-m-Y");
          $contrato->actualizarEstadoContrato($contrato,$vencimiento);
          $estado = $contrato->getEstado();
          if ($estado == "AL DIA"){
              $contrato->setSeRenuevaOno("RENUEVA");
              $renovacion = date("d-m-Y",strtotime($vencimiento."+ 1 month"));
              $contrato->setFechaVencimiento($renovacion);
          }

      }

}