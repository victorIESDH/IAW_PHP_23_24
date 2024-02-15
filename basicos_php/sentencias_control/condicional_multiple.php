<html> 
<head> 
 <title>Condicion SWITCH</title> 
</head> 
<body> 
<h1>Condicional SWITCH</h1> 
<?php 
 $dia_semana = 2; 
 switch ($dia_semana)
 {
	case 1:
		$dia = "Lunes";
		break;
	case 2:
		$dia = "Martes";
		break;
	case 3:
		$dia = "Miércoles";
		break;
	case 4:
		$dia = "Jueves";
		break;
	case 5:
		$dia = "Viernes";
		break;
	case 6:
		$dia = "Sábado";
		break;
	case 7:
		$dia = "Domingo";
		break;
	default:
		$dia = "Día incorrecto";
 }
 echo "Hoy es $dia";
?> 
</body> 
</html>