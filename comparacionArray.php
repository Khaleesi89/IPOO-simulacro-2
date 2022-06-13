<?php

$array1    = array("maria", "luisa", "blue", "luis");
$array2    = array("blue", "luisa", "maria","luis","maria");
$resultado = array_diff($array1, $array2);
print_r($resultado);
//$chan = empty($resultado);
//echo $chan;
var_dump( empty($resultado) );
$cha = gettype($resultado);

