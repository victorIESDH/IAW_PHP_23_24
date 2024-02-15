<html> 
<head> 
 <title>Bucles WHILE y DO WHILE</title> 
</head> 
<body> 
<h1>Bucles WHILE y DO WHILE</h1> 
<?php 
 $contador = 0;
 $salir = 5 ;
 echo "While <BR>";
 while ($contador <= $salir)
 {
	$contador++;
	echo "Contador = $contador <BR>";
 }
 echo "DO_while <BR>";
 $contador = 0;
 do 
 {
	$contador++;
	echo "Contador = $contador <BR>";
 }
 while ($contador <= $salir)
?> 
</body> 
</html>