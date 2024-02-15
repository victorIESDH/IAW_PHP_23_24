<?php
require "./BBDD.php";
$depurar = 0;
//conectar
$conexion = ConectarBBDD("prueba");

if ($conexion) 
{
	Mensaje("Conexion BBDD OK");
}
else
{
	Mensaje("Error de Conexion BBDD");	
}

//consultar
if (EjecutarSQL($conexion,"select * from gripe2020")) Mensaje("Sql lanzado correctamente");

//cerrar BBDD
CerrarBBDD($conexion);
?>