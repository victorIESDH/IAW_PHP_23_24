<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $semana = array ("Lunes","martes","Lunes","Lunes","Lunes","Lunes","Lunes");
        $semana2 = ["Lunes","martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];

        for ($i=0; $i < count($semana2); $i++) { 
            # code...
            echo "Día: ".$semana2[$i]."<BR>";
        }

        echo "<PRE>";
        //var_dump($semana);
        //var_dump($semana2);
        echo "</PRE>";
    ?>
</body>
</html>