<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AREA_PERSONAL</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		
		<?php
		session_start();
	if (isset($_SESSION['mi_session']))
	{
		echo "<BR>";
		echo "<h3> MI AREA PERSONAL</h3>";
		echo "<BR>";
		echo "<a href='correos.php'> PAGINA DE CORREOS</a>";
		echo "<BR>";
		echo "<a href='salir.php'> SALIR</a>";
	}
	else 
	{
		header("Location: login.php");

	}
	?>
	</div>
</body>
</html>
