<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
    border: 1px solid black;
    }
</style>
</head>
<body>
<?php

for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0,100);
}

foreach ($numero as $elemento) {
    $cuadrado[] = $elemento * $elemento;
    $cubo[] = $elemento * $elemento * $elemento;
}

?>
<table>
<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
<?php
for ($i = 0; $i < 20; $i++) {
    echo "<tr><td>".$numero[$i]."</td>";
    echo "<td>".$cuadrado[$i]."</td>";
    echo "<td>".$cubo[$i]."</td></tr>";
}
?>
</table>
</body>
</html>