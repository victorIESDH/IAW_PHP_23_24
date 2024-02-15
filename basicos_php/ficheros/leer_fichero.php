<?php
	$DatosConexion = parse_ini_file("fichero.ini");
	
	if (!$DatosConexion){
		echo "Fichero de configuración no encontrado.";
	}
	print_r($DatosConexion);
	foreach ($DatosConexion as $key => $value) 
	{
		# code...
		echo "Clave: $key <BR>";
		echo "Valor: $value <BR>";
	}
?>