<html> 
<head> 
 <title>Bucles FOR</title> 
</head> 
<body> 
<h1>Bucles FOR</h1> 
<?php 
 #$tabla=array("hola","adios","Juan");
 $tabla=["hola","adios","Juan"];
 echo "valor 1 = $tabla[0] <BR>";
 echo "valor 2 = $tabla[1] <BR>";
 echo "valor 3 = $tabla[2] <BR>";
 var_dump($tabla);
 echo "<BR>";
 $alumnos=array("75555555R" => "Adrian Terriza","85555555S" => "Daniel Tapon");
 var_dump($alumnos);
 /*for($i=1;$i<=100;$i++) 
 {
	 echo "$i <BR>";
 }*/
 /*for($i=100;$i>=1;$i--) 
 {
	 echo "$i <BR>";
 }*/
?> 
</body> 
</html>