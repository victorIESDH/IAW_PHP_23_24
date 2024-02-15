<?php
session_start();
include ("funciones.php");
if (!fValidaSesion()){
	echo "<head><meta http-equiv='refresh' content='1; url=login.php'></head>";
}

require "./BBDD.php";
//PintaTabla($_GET);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Averías</title>
</head>
<body>
	<div align= "center">
		<?php  

			$NPARTE = implode(" ",array_values($_GET));
			$SQLdel = "DELETE FROM averias WHERE averias.N_Parte = $NPARTE";

			$conexion=ConectarBBDD('prueba');

			if ($conexion){
				$resultado = EjecutarSQL($conexion,$SQLdel);
				if (!$resultado){
					mensaje("Error al eliminar registro.".mysql_error($conexion));
				} else {
					mensaje ("Registro eliminado correctamente.");
					echo "<head><meta http-equiv='refresh' content='1; url=listardatos.php'></head>";
				}
			}
			CerrarBBDD($conexion);
		?>
	</div>
</body>





