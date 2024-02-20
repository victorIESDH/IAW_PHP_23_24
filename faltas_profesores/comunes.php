<?php
include ("modBBDD.php");

//valida las credenciales pasadas como parametros y retorna verdadero o falso.
//En el caso de credenciales válidas, informa el perfil del usuario conectado en el parámetro $perfil.
function fValidaAcceso ($user, $pass,&$perfil)
	{
	//nos conectamos a la bd.
	$conexionBD = conectarBBDD("cuadrante_profesores"); 	
	//verificamos si la conexión es correcta y lanzamos la consulta de validación de credenciales.
	if ($conexionBD) {
		$cadenaSQL = "SELECT NOMBRE,PASSWORD,PERFIL FROM USUARIOS ";
		$cadenaSQL .= " WHERE NOMBRE = '$user' AND PASSWORD = '$pass'"; 
		$resultado = Ejecutar($conexionBD,$cadenaSQL,1);
		if ($resultado)
		{
			//consulta correcta.Credenciales válidas.
			$perfil = $resultado[0]['PERFIL'];
			return 1;
		}
		else
		{
			//consulta incorrecta.Credenciales inválidas. No tiene acceso.
			$perfil = "";
			return 0;
	    }

		CerrarConexion($conexionBD);
	  } 
}

function fValidaSession (){
	//habilitamos la sessión para acceder a los datos de $_SESSION 
	//para comprobar que el usuario ha validado sus credenciales correctamente.
	session_start();
	if (isset($_SESSION["session_id"]))
	{
		$session_activa = session_id();

		if ($_SESSION["session_id"] != $session_activa )
		{
			//credenciales no validas.
			return 0;	
		}	
		else
		{
			return 1;

		}
	}
	else
	{
		// no se ha iniciado la session correctamente.
		return 0;	
	}
}
function DiaSemana()
{
	$dia = date("N");
	switch ($dia) {
		case 1:
			$dia = "Lunes";
			break;
		case 2:
			$dia = "Martes";
			break;
		case 3:
			$dia = "Martes";
			break;
		case 4:
			$dia = "Martes";
			break;			
		case 5:
			$dia = "Martes";
			break;
		default:
			$dia = "Fin de semana";
			break;
	}
	return $dia;
}
?>