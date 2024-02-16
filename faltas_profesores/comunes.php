<?php
include ("modBBDD.php");

function fValidaAcceso ($user, $pass)
	{
	//nos conectamos a la bd.
	$conexionBD = conectarBBDD("cuadrante_profesores"); 	
	//verificamos si la conexión es correcta y lanzamos la consulta de validación de credenciales.
	if ($conexionBD) {
		$cadenaSQL = "SELECT NOMBRE,PASSWORD FROM USUARIOS ";
		$cadenaSQL .= " WHERE NOMBRE = '$user' AND PASSWORD = '$pass'"; 
		$resultado = Ejecutar($conexionBD,$cadenaSQL,1);
		if ($resultado)
		{
			//consulta correcta.Credenciales válidas.
			return 1;
		}
		else
		{
			//consulta incorrecta.Credenciales inválidas. No tiene acceso.
			return 0;
	    }

		CerrarConexion($conexionBD);
	  } 
}

function fValidaSession ()
	{

	if (isset($_SESSION['mi_session'])) {

		return 1;

	} else {

		return 0;
	}
}
?>