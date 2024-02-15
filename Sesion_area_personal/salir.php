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
		echo "FECHA INICIO: ".$_SESSION['inicio'];
		//echo "<BR>";include ("comunes.php");
		echo "FECHA FIN: ".date(DATE_RSS);
		session_destroy();

		echo "<a href='login.php'> LOGIN</a>";
		
	}
	else 
	{
		header("Location: login.php");

	}
	?>
</body>
</html>