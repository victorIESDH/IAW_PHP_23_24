<?php

session_start();
$usersesion=$_SESSION["user-session"];
$loginuser=$_SESSION["user"];

include ("funciones.php");
if (!fValidaSesion()){
	header('Location: login.html');
}

# Este .php muestra el contenido de la tabla AVERIAS. Para ello,
# crea una conexión con la base de datos, realiza una consulta,
# y guarda los resultados de dicha consula en el array $Taverias.
# Tras ello, se cierra la conexión con la base de datos. 

require "./BBDD.php";



$depurar = 0;

//conectar
$conexion = ConectarBBDD("prueba");

if ($conexion) {
	$resultado = EjecutarSQL($conexion,"select * from averias");
	if ($resultado){
		$Taverias = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
	}
}

//cerrar BBDD
CerrarBBDD($conexion);
?>

<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<html lagn="es">
<head>
	<meta charset="UTF-8">
	<title>Ciudadano Linux</title>

	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./estilos/fuentes.css" />

	<!-- meta:vp-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
	</style>
</head>

<body>

	<!-- Cabecera -->
	<header class="container-fluid">
		<div class="row">

			<!-- Banner -->
			<div class="container">

				<!-- Información usuario -->
				<div class="row" id="loginuser">

					<!-- Sesión de usuario -->
					<div class="col-md-12 d-none d-lg-block">			
						  <p>Bienvenido 
						    <b><?php
						    	echo "$loginuser";
						    ?>&nbsp &nbsp</b><a href="cerrar-sesion.php">Cerrar Sesión</a>	
						  </p> 
					</div>
				</div>
				<!-- Fin información usuario -->

				<!-- Título -->
				<div class="row">	

					<div class="col-md-12" id="title">
						<a>Gestor de <br/>Averías</a>					
					</div>					
				</div>
				<!-- Fin Título -->

			</div>
			<!-- FIN Banner -->

		</div>
	</header>
	<!-- FIN Cabecera -->

	<!-- Contenido -->
	<div class="contents container-fluid">
		<section class="row">
	
			<!-- Lista de datos -->
			<article class="col-sm-12 col-lg-12">

				<!-- Nombre sección -->
				<div class="row">
						<div class="col-xs-12 col-lg-12 nombre-secciones" >
						<h1>Listado de averías</h1>
					</div>
				</div>

				<div align="center">
					<table>
						<thead>
							<tr>
								<th>N_Parte</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Modelo</th>
								<th>Error</th>
								<th>Observaciones</th>
							</tr>
						</thead>
						<tbody>
							<!--
								Muestra el contenido del array $Taverias
							-->
							<?php foreach($Taverias as $parte){ ?>
							<tr>
								<td><?php echo $parte['N_Parte'] ?></td>
								<td><?php echo $parte['nombre'] ?></td>
								<td><?php echo $parte['apellidos'] ?></td>
								<td><?php echo $parte['modelo'] ?></td>
								<td><?php echo $parte['error'] ?></td>
								<td><?php echo $parte['observaciones'] ?></td>
								<td><a class="boton btn-editar" href="<?php echo "editar.php?N_Parte=" . $parte['N_Parte']?>">Editar</a></td>
								<td><a class="boton btn-eliminar" href="<?php echo "eliminar.php?N_Parte=" . $parte['N_Parte']?>">Eliminar</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

					<br><br><input type="button" class="boton btn-aniadir" onclick="location.href='aniadir.php'" name="aniadir" value="Añadir registro"/>
				</div>
			</article>
			<!-- FIN Lista de datos -->		
		</section>
	</div>
	<!--FIN Contenido -->

	<!--Pie -->			
	<div class="container-fluid pie">
		<div class="col-xs-12 contenido-pie">
			<div class="container ">
				<div class="row">
					<div class="col-md-4" id="licencia">						
						<h3> Licencia Creative Commons </h3>
						<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /> 
					</div>
					<div class="col-md-4" id="licencia"> 
						<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">Este obra está bajo una licencia de Creative Commons Reconocimiento-NoComercial-CompartirIgual 4.0 Internacional</a>.
					</div>
					<div class="col-md-4" id="difusion" >
						<div class="container">
							<div class="row">
								<div class="col-md-12" id="social">
									<a href="https://www.linkedin.com/in/josemanuel-systems/" target="_blank">
										<img alt="Sígueme en facebook!" class="rounded-circle" height="30" width="30" src="https://2.bp.blogspot.com/-28mh2hZK3HE/XCrIxxSCW0I/AAAAAAAAH_M/XniFGT5c2lsaVNgf7UTbPufVmIkBPnWQQCLcBGAs/s1600/facebook.png" title="Sígueme en facebook!"/>
									</a>
									<a href="https://www.linkedin.com/in/josemanuel-systems/" target="_blank">
										<img alt="Sígueme en instagram!" class="rounded-circle" height="30" width="30" src="https://4.bp.blogspot.com/-Ilxti1UuUuI/XCrIy6hBAcI/AAAAAAAAH_k/QV5KbuB9p3QB064J08W2v-YRiuslTZnLgCLcBGAs/s1600/instagram.png" title="Sígueme en instagram!"/>
									</a>
									<a href="https://www.linkedin.com/in/josemanuel-systems/" target="_blank">
										<img alt="Búscame en linkedin!" class="rounded-circle" height="30" width="30" src="https://4.bp.blogspot.com/-0KtSvK3BydE/XCrIzgI3RqI/AAAAAAAAH_w/n_rr5DS92uk9EWEegcxeqAcSkV36OWEOgCLcBGAs/s1600/linkedin.png" title="Búscame en linkedin!"/>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" id="contactar">
									<a class="botones-nav" href="./contacta.html">Contacta con gestor</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FIN Pie -->

</body>
</html>