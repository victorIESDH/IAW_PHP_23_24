<?php

    $total = 0;
    $productosSeleccionados = array();

    $camposfaltantes = array();
    $campos = array("nombre", "telefono", "direccion");
    
    foreach ($campos as $campo) {
        if (empty($_POST[$campo])) {
            $camposfaltantes[] = $campo;
        }
    }
    
    if(empty($_POST["nombre"]) || empty($_POST["telefono"]) || empty($_POST["direccion"])) {
        echo "Rellene los siguientes campos para continuar con el pedido: ". implode(", ", $camposfaltantes) ."<br>";
        echo '<a href="Pedido.html">Volver al formulario</a>';
    } else {
    foreach ($_POST as $producto => $precio) {
        
        if ($producto <> "nombre" && $producto <> "direccion" && $producto <> "telefono") {
            $total += floatval($precio); 
            $productosSeleccionados[] = $producto;
        }
    }
    echo "Nombre Cliente: $_POST[nombre]<br>";
    echo "Telefono del Cliente: $_POST[telefono]<br>";
    echo "Direccion del Cliente: $_POST[direccion]<br>";
    echo "<br>Su pedido se esta tramitando";
    echo "<br>El pedido contiene "  . implode(", ", $productosSeleccionados). ".<br> 
    El total del pedido es $total €";
    
}

?>