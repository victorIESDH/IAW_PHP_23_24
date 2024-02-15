<?php 
$cadena = "Hola ";
$nombre = "Juan";
$val1 = 100;
$val2 = "100";

$saludo = $cadena.$nombre;
echo "concatenación: $saludo <br>";
$saludo .= " García";
echo "concatenación 2: $saludo <br>";
$resultado = $val1 + $val2;
echo "Suma: $resultado <br>";
$resultado += 5;
echo "Incremento: $resultado <br>";
$resultado2 = ++$resultado;
echo "Incremento unidad resultado:".$resultado." resultado 2:".$resultado2."<br>";
$resultado2 = $resultado++;
echo "Incremento unidad resultado:".$resultado." resultado 2:".$resultado2."<br>";

?> 