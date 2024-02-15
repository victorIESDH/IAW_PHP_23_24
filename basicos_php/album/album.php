<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album de imágenes</title>
</head>
<body>
    <?php
        foreach (glob("*.jpg") as $nombre_fichero ) {
            echo "fichero $nombre_fichero ". "<BR>";
            echo "<img src=$nombre_fichero />";
        }
    ?>
</body>
</html>