<?php

    include_once "ModBBDD.php";
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
        die();
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
    
    $pedido =  implode(", ", $productosSeleccionados);
    echo "<br>El pedido contiene $pedido "."<br>"."El total del pedido es $total €";
}
  //acceso a datos. Insertamos pedido.
  $con = conectarBBDD("pedidos2");
  if ($con) {
    # code...
    //var_dump ($con);
    $cadenaSQL = "INSERT INTO pedidos (`Codigo`, `Nombre`, `Telefono`, `Direccion`, `Descripcion`)"; 
    $cadenaSQL .= " VALUES (NULL, '".$_POST['nombre']."', '".$_POST['telefono']."', '".$_POST['direccion']."', '".$pedido."')";
    //echo $cadenaSQL;
    if (Ejecutar($con,$cadenaSQL,0))
    {
        echo "<br>Su pedido se esta tramitando....";
    }
    CerrarConexion($con);
  } 
?>