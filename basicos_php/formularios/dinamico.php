<html>
<head>
    <title>Formulario dinámico</title>
</head>
<body>
    <?php
    # La lista de nombres; por defecto vacía
    $nombres = [];
    # Si hay nombres enviados por el formulario; entonces
    # la lista es el formulario.
    # Cada que lo envíen, se agrega un elemento a la lista
    if (isset($_POST["nombres"])) {
        $nombres = $_POST["nombres"];
    }
    # Detectar cuál botón fue presionado
    # Más info: https://parzibyte.me/blog/2019/07/23/php-formulario-dos-botones/
    # En caso de que haya sido el de guardar, no agregamos más campos
    if (isset($_POST["guardar"])) {
        # Quieren guardar; no quieren agregar campos
        echo "OK se guarda lo siguiente:<br>";
        print_r($nombres);
        exit;
    }
    ?>
    <form method="post" action="dinamico.php">
        <!--Comienza el ciclo que dibuja los campos dinámicos-->
        <?php foreach ($nombres as $nombre) { ?>
            <input value="<?php echo $nombre ?>" type="text" name="nombres[]">
            <br><br>
        <?php } ?>
        <!--Termina el ciclo que dibuja los campos dinámicos-->

        <!--Fuera de la lista tenemos siempre este campo, es el primero-->
        <input autocomplete="off" autofocus value="" type="text" name="nombres[]">
        <br><br>
        <button name="agregar" type="submit">Agregar campo</button>
        <button name="guardar" type="submit">Guardar lista</button>
    </form>
</body>
</html>