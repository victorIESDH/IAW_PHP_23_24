<html>
<body>
<form action="ejemplo_post.php" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    Edad: <input type="number" name="edad"><br>
    <input type="submit" name="enviar" value="Enviar">
</form>
<?php 
if (isset($_POST["enviar"]))
{
    if (empty( $_POST["nombre"]))
    {
        echo "El nombre no ha sido informado.<BR>";
    }
    /*echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    */   
}
/*if (isset($_POST["nombre"]) and isset($_POST["email"]))
{
    var_dump($_POST);
    echo "Tu nombre es " .$_POST["nombre"]. " y tu correo ".$_POST["email"];
}*/
?>
</body>
</html>