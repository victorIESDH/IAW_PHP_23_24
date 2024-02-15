<html>
<body>
<?php

if (isset($_POST["añadir"]) and isset($_POST["tarea"]))
{
    var_dump($_POST["tarea"]);
    $tabla_tareas= $_POST["tarea"];
    var_dump($tabla_tareas);
}
if (isset($_POST["mostrar"])) 
{
    echo "<pre>";
    var_dump($tabla_tareas);
    echo "</pre>";    
    
}
?>
<form action="lista_tareas.php" method="post">
    <?php
    if (isset($tabla_tareas)) 
    {
        foreach ($tabla_tareas as $key => $value) {
            # code...
            echo "Tarea: <input type=\"text\" name=\"tarea[]\" value=".$value."><br>"; 
        }
    }
    else {
        # code...
        $tabla_tareas = [];
        echo "Tarea: <input type=\"text\" name=\"tarea[]\"><br>";
    }
    
    ?>
    <input type="submit" name="añadir" value="Añadir">
    <input type="submit" name="mostrar" value="Mostrar tareas">
</form>
</body>
</html>