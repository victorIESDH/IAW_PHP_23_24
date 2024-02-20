<?php
include ("comunes.php");

if (!fValidaSession()) 
{
    header("location:login.php");
    exit();
}
else
{
    //obtenemos el usuario logueado para mostrarlo en la web.
    $usuario_conectado = $_SESSION["usuario_session"];
    $perfil_usuario = $_SESSION["perfil_session"];
    //Obtenemos el listado de profesores para cargarlos en el formulario.
    $conexionBD = conectarBBDD("cuadrante_profesores"); 	
	//verificamos si la conexión es correcta.
	if ($conexionBD) {
		$cadenaSQL = "SELECT CODIGO,NOMBRE FROM PROFESORES";
		$profesores = Ejecutar($conexionBD,$cadenaSQL,1);
		if (!$profesores)
		{
			echo "Error inesperado al acceder a la BD.";
	    }
		CerrarConexion($conexionBD);
	  } 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
</head>
<body>
    <!-- ========== CABECERA ========== -->
    <div class="container p-2 my-3 bg-success rounded">
        <div class="row">
            <div class="col-lg-6 text-white">
                <h4>Cuadrante de faltas de asistencias</h4>
            </div>
            <div class="col-lg-6 text-warning">
                <h5><?php  echo "Usuario conectado: $usuario_conectado <-> Perfíl:  $perfil_usuario" ?></h5>
            </div>
        </div>
    </div>
    <!-- ========== CUERPO ========== -->
    <div class="container p-2 my-3">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="shadow p-3 mb-3 bg-white rounded">
                    <div class="text-center">
                        <h3>alta de faltas de asistencias</h3>
                    </div>
                    <form action="formulario_faltas.php" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="profesor" class="form-label">Selecciona el profesor:</label>
                            <select class="form-select" id="profesor" name="profesor">
                                <!--bloque PHP para cargar el select con los datos de la BD. -->
                                <?php 
                                    foreach ($profesores as $registro) {
                                        echo "<option value='".$registro['CODIGO']."'>".$registro['NOMBRE']."</option>";
                                    }    
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Indique la fecha de la falta de asistencia:</label>
                            <input type="date" class="form-control" id="fecha"  name="fecha">
                        </div>
                        <button type="submit" name = "guardar" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                    <?php
                        //Verificamos si han pulsado el botón guardar para almacenar la falta de asistencia.
                        if (isset($_POST['guardar']))
                        {
                            $conexionBD = conectarBBDD("cuadrante_profesores"); 	
	                        //verificamos si la conexión es correcta.
	                        if ($conexionBD) {
		                        $cadenaSQL = "INSERT INTO FALTAS(PROFESOR,FECHA) VALUES ('".$_POST['profesor']."', '".$_POST['fecha']."') ";
		                        $resultado = Ejecutar($conexionBD,$cadenaSQL,0);
		                        if ($resultado)
		                        {
			                        echo "El alta de la falta de asistencia se ha realizado correctamente.";
	                            }
                                else
                                {
                                    echo "Error inesperado al acceder a la BD.";
                                }
		                        CerrarConexion($conexionBD);
	                        }  
                        }
                    ?>
                    <div class="d-grid gap-2 col-6 mx-auto my-5">
                        <a href="principal.php" class="btn btn-secondary btn-block" role="button">Volver al Menú Principal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== PIE DE LA WEB ========== -->
    <div class="container p-2 my-2 bg-success rounded">
        <div class="row">
            <div class="col-md-8 text-white">
                <h4>I.E.S. Delgado Hernández</h4>
            </div>
            <div class="col-md-4 text-warning">
                <h5><?php  echo date("H:i:s d-m-Y") ?></h5>
            </div>
        </div>
    </div>
    
</body>
</html>