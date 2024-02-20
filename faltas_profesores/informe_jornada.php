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
	if ($conexionBD) 
    {
		$dia = DiaSemana();
        $cadenaSQL = "SELECT HORARIO.DIA,HORARIO.HORA,HORARIO.GRUPO,HORARIO.AULA,PROFESORES.NOMBRE "; 
        $cadenaSQL .= "FROM HORARIO, FALTAS, PROFESORES WHERE FALTAS.PROFESOR = HORARIO.PROFESOR AND " ;
        $cadenaSQL .= "FALTAS.PROFESOR = PROFESORES.CODIGO AND FALTAS.FECHA = CURDATE() AND HORARIO.DIA = '".$dia."' "; 
        $cadenaSQL .= "ORDER BY HORARIO.HORA,HORARIO.GRUPO,PROFESORES.NOMBRE ";

        $informe = Ejecutar($conexionBD,$cadenaSQL,1);
		if (!$informe)
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
            <div class="col-lg-8">
                <div class="shadow p-3 mb-3 bg-white rounded">
                    <div class="text-center">
                        <h3> Informe de faltas de asistencias para la jornada</h3>
                    </div>
                    <table class="table table-hover table-striped table-warning">
                        <thead>
                            <tr>
                                <th scope="col">Hora</th>
                                <th scope="col">Grupo</th>
                                <th scope="col">Aula</th>
                                <th scope="col">Profesor</th>                                
                            </tr>
                        </thead>
                        <tbody>
                             <!--bloque PHP para cargar el select con los datos de la BD. -->
                             <?php foreach($informe as $registro){ ?>
							<tr>
								<td><?php echo $registro['HORA'] ?></td>
								<td><?php echo $registro['GRUPO'] ?></td>
								<td><?php echo $registro['AULA'] ?></td>
                                <td><?php echo $registro['NOMBRE'] ?></td>
							</tr>
							<?php } ?>                           
                        </tbody>
                    </table>                    
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