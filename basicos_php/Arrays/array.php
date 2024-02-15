<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $numeroValores = rand(5, 15);

      print "  <h2>Datos iniciales</h2>\n";
      print "\n";
      print "  <p>Número de valores en la matriz: $numeroValores</p>\n";
      print "\n";
      print "  <p>Valores elegidos al azar entre 0 y 10.</p>\n";
      print "\n";
      
      // Crea la matriz inicial
      $matriz = [];
      for ($i = 0; $i < $numeroValores; $i++) {
          $matriz[$i] = rand(0, 10);
      }
      
      print "  <h2>Matriz de valores</h2>\n";
      print "\n";
      print "  <pre>\n"; print_r($matriz); print "</pre>\n";
      print "\n";   
    ?>
</body>
</html>