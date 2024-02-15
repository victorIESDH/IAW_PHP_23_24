<?php
//funciones de acceso a BBDD
function conectarBBDD($aplicacion)
{
    $DatosConexion = parse_ini_file("conf_BBDD.ini",true);
    if (!$DatosConexion)
    {
        echo "Fichero configuracion no localizado";
		return 0;
    }
    //procedemos a conectarnos a la BBDD.
    $servidor = $DatosConexion[$aplicacion]["servidor"];
	$bd = $DatosConexion[$aplicacion]["bd"];
	$usuario = $DatosConexion[$aplicacion]["usuario"];
	$password = $DatosConexion[$aplicacion]["password"];
	
	$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
    if (!$conexion) 
	{
    	echo "Error ConectarBBDD". mysqli_connect_error();
    	return 0;
	}

    return $conexion;
}

function Ejecutar($ConexionBD,$CadenaSQL,$EsConsulta)
{
    $resultado = mysqli_query( $ConexionBD, $CadenaSQL);
	
	if (!$resultado)
	{
		echo "Error lanzar consulta". mysqli_error($ConexionBD);
		return 0;
	}
    if ($EsConsulta == 1)
    {
        $registros = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        return $registros;
    }
    else 
    {
        return 1;
    }
}

function CerrarConexion($ConexionBD)
{
    if  (!mysqli_close($ConexionBD))
	{
		echo "Error cerrar BBDD". mysqli_error($ConexionBD);
		return 0;
	}
    return 1;
}

?>