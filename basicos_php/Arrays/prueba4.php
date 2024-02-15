<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $modulos = array ("01B" => array ("Nombre" => "IAW","horas" =>"80"), 
        "02S" => array ("Nombre" => "SAD","horas" =>"100"));
        foreach ($modulos as $key => $datos) {
            # code...
            echo "Key:".$key."<BR>";
            foreach ($datos as $key2 => $valor){
                echo "Key2: $key2 valor: $valor <BR>";
            } 

        }
    ?>
</body>
</html>