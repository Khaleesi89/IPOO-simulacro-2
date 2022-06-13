<?PHP


//PROBANDO FECHAS Y COMPARACION.......ESTE FUNCIONA!!!!!


$fecha1= new DateTime("2017-08-01");
$fecha2= new DateTime("2017-08-04");
$now = new DateTime("now");

//para hacer la diferencia de fechas...me devuelve un objeto
$diff = $fecha1->diff($fecha2);

// El resultados sera 3 dias
//luego utiliza la funcion "day" para sacar los dias de diferencia y me devuelve un string
$total = $diff->days;
//con intval convierto ese string en un integer para poder usarlo en operaciones
$yo = intval($total);
//con gettype saco que tipo de dato tengo en esa variable
$tipo = gettype($yo);

$suma = $yo + 1;
echo $suma;


//suma un mes desde una fecha

$fecha_actual = date("d-m-Y");
echo $fecha_actual;
$stri = date("d-m-Y",strtotime($fecha_actual."+ 1 month"));
echo $stri;

//SE PUEDE HACER COMO ESTA AQUI ABAJO
//echo date("d-m-Y",strtotime($fecha_actual."+ 1 month")); 
/*$feha = strtotime($fecha_actual."+ 1 days");
echo $feha;

/*
. ' dias'
$last = date_create("25 Dec 2020");
$now = date_create("now");
$next = date_create("25 Dec 2021");
 
$days_last = date_diff($last, $now);
 
$days_next = date_diff($now, $next);
 
echo date_interval_format($days_last, '%a days').' since last Christmas.';
// Output: 170 days since last Christmas.
 
echo date_interval_format($days_next, '%a days').' to next Christmas.';
// Output: 194 days to next Christmas.




/*$last = new DateTime("25 Dec 2020");
$now = new DateTime("now");

 
$days_last = $last->diff($now);
$i=$days_last->format('%a');
//echo $i;
$k=settype($i, 'int');
echo $k;
$tipo = gettype($k);
//$k = intval($tipo);
echo $tipo;
die();
$a = sprintf($days_last);
echo $a;
die();
$tipo = gettype($days_last);
echo $tipo;
 /*

$antigua = new DateTime("01 Jun 2022");
$hoy = new DateTime("now");

$compara1 = $antigua->diff($hoy);
echo $compara1; */