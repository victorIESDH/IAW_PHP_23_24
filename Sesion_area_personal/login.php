<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO_SESION</title>
</head>
	<body>
		<div align="center">

			<?php 
			if(isset($_COOKIE['recuerda'])){
				$cadena = $_COOKIE['recuerda'];
				} else 
				{
					$cadena='';
				} 	
			?>

			<h2>FOMULARIO VALIDADO</h2>
			<BR>
			<form action="login.php" method="POST" accept-charset="utf-8">

			 <input type="text" name="usuario" id="usuario" placeholder="<?php echo $cadena; ?>"><BR>
			 <input type="password" name="password" id="password" placeholder="PASS"><BR>
			<BR>
			<input type="checkbox" name="check">RECUERDA
			<BR>
			<input type="submit" name="submit">

		</form>

		<?php 
			$location = "areapersonal.php";
			include ("comunes.php");
			
	  		if(isset($_POST["submit"]))
	  		{
	  		

	  			if(fValidaAcceso($_POST['usuario'], $_POST['password']) == 1){

	  				session_start();

	  				$_SESSION['mi_session'] = session_id();
	  				$_SESSION['inicio'] = date(DATE_RSS);
	  			
	  				if ($_POST['check']){
	  					setcookie("recuerda",$_POST["usuario"]);
	  				}
	  				header("Location: areapersonal.php");

	  			}else {

	  				echo "ERROR! El usuario o contraseña no coinciden.";
	  			}


	  		}	


			?>
		</div>
		
	</body>
</html>