<?php
$depurar = 0;

function Mensaje($cadena)
{
	echo "<BR>".$cadena."<BR>";
}

function PintaTabla($tabla)
{
	echo "<PRE>";
	print_r($tabla);
	echo "</PRE>";
}

function ConectarBBDD($nombre) 
{
	Global $depurar;

	$DatosConexion = parse_ini_file("conf_BBDD.ini",true);
	if (!$DatosConexion)
	{
		Mensaje("Fichero configuracion no localizado");
		return 0;
	}

	if ($depurar) PintaTabla($DatosConexion);

	$servidor = $DatosConexion[$nombre]["servidor"];
	$bd = $DatosConexion[$nombre]["bd"];
	$user = $DatosConexion[$nombre]["usuario"];
	$password = $DatosConexion[$nombre]["password"];
	
	$conexion = mysqli_connect($servidor, $user, $password, $bd);
	
	if (!$conexion) 
	{
    	Mensaje("Error ConectarBBDD". mysqli_connect_error());
    	return 0;
	}
	
	if ($depurar) PintaTabla($conexion);
	return $conexion;	
}

function EjecutarSQL($conexion,$SQL)
{
	Global $depurar;
	$resultado = mysqli_query( $conexion, $SQL);
	
	if (!$resultado)
	{
		Mensaje("Error lanzar consulta". mysqli_error($conexion));
		return 0;
	}
	
	if ($depurar) PintaTabla($resultado);

	return $resultado;	
}

function CerrarBBDD($conexion)
{
	$Cerrada = mysqli_close($conexion);
	if (! $Cerrada) 
	{
		Mensaje("Error cerrar BBDD". mysqli_error($conexion));
		return 0;
		//Mensaje("Conexion BBDD Cerrada.");		
	} 
}
?>