<?php
/*

5. Implementar la clase EmpresaCable que contiene una colección de planes y la colección de
contratos realizados por la empresa. La clase cuenta con los siguientes métodos:
● incorporarPlan: que incorpora a la colección de planes un nuevo plan siempre y cuando no haya un
plan con los mismos canales y los mismos MG (en caso de que el plan incluyera).
● incorporarContrato: método que recibe por parámetro el plan, una referencia al cliente, la fecha de
inicio y de vencimiento del mismo y si se trata de un contrato realizado en la empresa o via web (si el
valor del parámetro es True se trata de un contrato realizado via web).
● retornarImporteContratos: método que recibe por parámetro el código de un plan y retorna la suma
de los importes de los contratos realizados usando ese plan.
● pagarContrato: método recibe como parámetro un contrato, actualiza su estado y retorna el importe
final que debe ser abonado por el cliente. */

class EmpresaCable{
    private $coleccPlanes;
    private $coleccContratos;


    public function __construct($arrayPlanes,$arrayContratos){
        $this->coleccPlanes = $arrayPlanes;
        $this->coleccContratos = $arrayContratos;
    }

    

    public function getColeccPlanes(){
        return $this->coleccPlanes;
    }

    public function setColeccPlanes($arrayPlanes){
        $this->coleccPlanes = $arrayPlanes;
    }

    public function getColeccContratos(){
        return $this->coleccContratos;
    }

    public function setColeccContratos($arrayContratos){
        $this->coleccContratos = $arrayContratos;
    }

    public function __toString()
    {
        $array1 = $this->getColeccPlanes();
        $planes = $array1->mostrarColecciones();
        $array2 = $this->getColeccContratos();
        $contratos = $array1->mostrarColecciones();
        $info = "
        ***************
        COLECCION DE PLANES: {$planes}
        ***************
        COLEECION DE CONTRATOS: {$contratos}
        ***************
        ";
        return $info;
    }


    //como mostrar las colecciones de objetos


    public function mostrarColecciones($array){
        $stringObj = "";
        foreach ($array as $key) {
           
            $stringObj = " " .$key;
        }
        return $stringObj;
    }

    /* incorporarPlan: que incorpora a la colección de planes un nuevo plan siempre y cuando no haya un
    plan con los mismos canales y los mismos MG (en caso de que el plan incluyera). */

    public function incorporarPlan($plan){

        

    }




    /* incorporarContrato: método que recibe por parámetro el plan, una referencia al cliente, la fecha de
    inicio y de vencimiento del mismo y si se trata de un contrato realizado en la empresa o via web (si el
    valor del parámetro es True se trata de un contrato realizado via web). */

    public function incorporarContrato($plan,$cliente,$fechaInicio,$vencimiento,$tipoContrato){

    }






    /* retornarImporteContratos: método que recibe por parámetro el código de un plan y retorna la suma
    de los importes de los contratos realizados usando ese plan. */


    public function retornarImporteContratos($codigoPlan){

    }








    /* pagarContrato: método recibe como parámetro un contrato, actualiza su estado y retorna el importe
    final que debe ser abonado por el cliente. */
    
    public function pagarContrato($contrato){

    }

}