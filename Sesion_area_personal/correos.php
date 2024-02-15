<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CORREOS</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	include ("comunes.php");
		session_start();
	if (fValidaSession()==1)
	{
		echo "<BR>";
		echo "<h3> CORREOS</h3>";
		echo "<BR>";
		echo "<a href='areapersonal.php'> VOLVER A MI ÁREA PERSONAL</a>";
		echo "<BR>";
	
	}
	else 
	{
		header("Location: login.php");

	}
	?>
</body>
</html>