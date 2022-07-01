<?php

$times_serie_a = array("INTER", "FLAMENGO", "CORITIBA", "SANTOS");
$times_serie_b = array("GREMIO", "CRUZEIRO", "CSA" );


array_push($times_serie_a, "FLUMINENSE", "ATLETICO MG");
printData($times_serie_a);

array_push($times_serie_b, "VASCO", "NAUTICO");
printData($times_serie_b);



function printData($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    echo "<br>";
}