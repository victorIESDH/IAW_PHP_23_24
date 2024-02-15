<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
		$DNI=array
        (
            "758888888W" => array
                (
                    "Nombre"=>"Víctor",
                    "Apellidos"=>"García",
                    "Teléfono"=>"959471852"
                ),
            "777777777A" => array
                (
                    "Nombre"=>"Pepe",
                    "Apellidos"=>"García",
                    "Teléfono"=>"959971852"
                )
                );
        //echo $DNI["758888888W"]["Nombre"];        
        echo "<PRE>";
        var_dump($DNI);
        echo "</PRE>";

        foreach($DNI as $valordni => $info){		
                echo "<BR>".$valordni;
                    foreach($info as $key => $valor){				
                            echo "<BR>".$key;
                            echo "<BR>".$valor;	
            }		
        }
        ?>
</body>
</html>              