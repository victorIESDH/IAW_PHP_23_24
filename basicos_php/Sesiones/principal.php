<?php
session_start();
if (isset($_SESSION["session_id"]))
{
    $session_activa = session_id();
    if ($_SESSION["session_id"] == $session_activa )
    {
        echo "Todo correcto, session activa: $session_activa";
        echo "<p><a href= 'cerrarsesion.php'/>Cerrar sessión activa.</a></p>";   
    }
    else
    {
        header("location:login.php");
        exit();
    } 
}
else
{
    header("location:login.php");
    exit();
}
?>