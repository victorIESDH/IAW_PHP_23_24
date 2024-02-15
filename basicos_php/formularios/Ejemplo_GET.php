<html>
<body>
<form action="ejemplo_get.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
<?php 
if (isset($_GET["nombre"]) and isset($_GET["email"]))
{
 echo "Tu nombre es " .$_GET["nombre"]. " y tu correo ".$_GET["email"];
}
?>
</body>
</html>