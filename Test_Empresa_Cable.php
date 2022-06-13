<?php

include "EmpresaCable.php";
include "Canal.php";
include "Cliente.php";
include "Planes.php";
include "Contrato.php";
include "Oficina.php";
include "ViaWeb.php";



/*
6. Implementar un script Test_Empresa_Cable donde:
a) Se crea 1 instancia de la clase Empresa_Cable.*/

$empresa = new EmpresaCable(array (), array());


/*b) Se crean 3 instancias de la clase Canal.*/

$canal1 = new Canal("noticias",2000,"con HD");
$canal2 = new Canal("musical", 1000, "sin HD");
$canal3 = new Canal("peliculas",2500,"con HD");


/*c) Se crean 2 instancias de la clase Planes, cada una de ellas con su código propio que hacen
referencia a los canales creados anteriormente (uno de los códigos de plan debe ser 111).*/

$planes1 = new Planes("111",$canal1,234,100);
$planes2 = new Planes("222",$$canal2,543,150);



/*d) Crear una instancia de la clase Cliente*/

$cliente = new Cliente ("ramon","valdez",3443222,"buenos aires 2321");
$cliente1 = new Cliente ("roberto","klimisch",33332222,"av roca 650");
$cliente2 = new Cliente ("estela","nunez",555555,"sntiago del estero 543");


/*e) Se crean 3 instancias de Contratos, 1 correspondiente a un contrato realizado en la empresa y 2
realizados via web.*/

$contratoEmpresa1 = new Oficina("20-10-2021","30-01-2022",$planes1,"",1200,"",$cliente);
$contratoWeb1 = new ViaWeb("10-10-2021","30-04-2022",$planes2,"",2000,"",$cliente1,10);
$contratoWeb2 =new ViaWeb("02-11-2021","30-03-2022", $planes1,"",1700,"",$cliente2,10);



/*f) Invocar con cada instancia del inciso anterior al método calcularImporte y visualizar el resultado.*/

$importe1 = $contratoEmpresa1->calcularImporte();
echo $importe1 ."\n";
$importe2 = $contratoWeb1->calcularImporte();
echo $importe2 ."\n";
$importe3 = $contratoWeb2->calcularImporte();
echo $importe3 ."\n";


/*g) Invocar al método incorporaPlan con uno de los planes creados en c).*/
/*h) Invocar nuevamente al método incorporaPlan de la empresa con el plan creado en c).*/

$empresa->incorporarPlan($planes1);
$empresa->incorporarPlan($planes2);


/*i) Invocar al método incorporarContrato con los siguientes parámetros: uno de los planes creado en c), el cliente 
creado en e), la fecha de hoy para indicar el inicio del contrato, la fecha de hoy más 30 días para indicar 
el vencimiento del mismo y false como último parámetro.*/





/*j) Invocar al método incorporarContrato con los siguientes parámetros: uno de los planes creado en c), el cliente
 creado en e), la fecha de hoy para indicar el inicio del contrato, la fecha de hoy más 30 días para indicar
  el vencimiento del mismo y true como último parámetro.*/




/*k) Invocar al método pagarContrato que recibe como parámetro uno de los contratos creados en d) y que haya sido
 contratado en la empresa.*/





/*l) Invocar al método pagarContrato que recibe como parámetro uno de los contratos creados en d) y que haya sido
 contratado vía web.*/





/*m) invoca al método retornarImporteContratos con el código 111. */