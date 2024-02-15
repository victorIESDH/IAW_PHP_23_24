<?php
session_start();
$usersesion=$_SESSION["user-session"];
$loginuser=$_SESSION["user"];

include ("funciones.php");
if (!fValidaSesion()){
	header('Location: login.html');
}
require "./BBDD.php";
?>

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

			<!-- Columna blanca -->
			<div class=" col-lg-1 d-none d-lg-block">
				<div class="row">
	        	</div>
			</div>

			
			<!-- Añadir -->
			<article class="col-sm-12 col-lg-10">

				<!-- Nombre sección -->
				<div class="row">
						<div class="col-xs-12 col-lg-12 nombre-secciones" >
						<h1>Añadir</h1>
					</div>
				</div>

				<div align="center">

					<!-- Añadir avería-->
					<form action='<?php $_SERVER["PHP_SELF"] ?>' Method="POST">
						<table>
							<tr>
								<td class="campos"><label for="nombre">Nombre</label></td>
								<td><input type="text" id="nombre" name="nombre" size="10" maxlengtd="15"/></td>
							<tr>
							<tr>
								<td class="campos"><label for="apellidos">Apellido</label></td>
								<td><input type="text" id="apellidos" name="apellidos" size="10" maxlengtd="15"/></td>
							<tr>
							<tr>
								<td class="campos"><label for="modelo">Modelo de PC</label></td>
								<td>
									<select name="modelo">
										<option value="Basico">Básico</option>
										<option value="Multimedia">Multimedia</option>
										<option value="Gaming">Gaming</option>
										<option value="Server">Server</option>
									</select>
								</td>
							<tr>
							<tr>
								<td class="campos"><label for="error">Errores</label></td>
								<td>
									<select name="error">
										<option value="No enciende">No enciende</option>
										<option value="No detecta hardware">No detecta hardware</option>
										<option value="No inicia SO">No inicia SO</option>
										<option value="Se reinicia constantemente">Se reinicia constantemente</option>
									</select>
								</td>
							<tr>
							<tr>
								<td class="campos"><label for="observaciones">Observaciones</label></td>
								<td>
									<textarea name="observaciones" rows="4" cols="50"></textarea>
								</td>
							<tr>
						</table><br><input class="boton btn-enviar" type="button" onclick="location.href='listardatos.php'" name="volver" value="Volver a lista"/>		
						<input class="boton btn-aniadir" type="submit" value="Añadir"/>
					</form>
					<!-- Añadir avería-->
				</div>

				<!-- Columna blanca -->
				<div class=" col-lg-1 d-none d-lg-block">
					<div class="row">
		        	</div>
				</div>

			</article>
			<!-- FIN Añadir -->

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

<?php
	if(empty($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["nombre"])){
			$errores[] = "Introduce nombre y apellidos.";
		}
		if(empty($_POST["observaciones"])){
			$errores[] = "Introduce una observación.";
		}
		if(isset($errores)){
	    	foreach ($errores as $error){
	        echo "<div align='center'><li>$error</li></div>";
		   	}
		}
		if (empty($errores)){
			$columas = implode(", ",array_keys($_POST));
			$valores = implode("', '", array_values($_POST));
			$SQLadd = "INSERT INTO averias ($columas) VALUES ('$valores')";

			$conexion=ConectarBBDD('prueba');

			//PintaTabla($columns);
			//PintaTabla($values);
			//PintaTabla($SQLadd);

			if ($conexion){
				//realizar la modificación del registro
				$resultado = EjecutarSQL($conexion,$SQLadd);
				if (!$resultado){
					mensaje("Error al añadir registro".mysql_error($conexion));
				} else {
					header('Location: listardatos.php');
					echo "<head><meta http-equiv='refresh' content='1; url=listardatos.php'></head>";
				}
			}
		}

		//Cerramos la base de datos
		CerrarBBDD($conexion);
	}
?>
