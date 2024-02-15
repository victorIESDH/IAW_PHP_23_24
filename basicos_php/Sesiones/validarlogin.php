<?php
if (isset($_POST['validar']))
{
    var_dump($_POST);
    if (!empty($_POST["usuario"]) && !empty($_POST["password"]))
    {
        //validamos y creamos una sessión.
        if ($_POST["usuario"] == "usuario" && $_POST["password"] == "usuario")
        {
            echo "<p>Los datos son correctos.</p>";
            session_start();
            echo session_id();
        }
        else
        {
            echo "<p>Los datos son incorrectos.</p>";
            echo "<p><a href='index.html'>Volver a introducir los datos</a></p>";
        }
    }
}
else
{
    header("location:index.html");
    exit();
}
?>