<?php	
include ("BBDD.php");
	
if(empty($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["usuario"]) || empty($_POST["password"]) ){
		echo "Rellene el campo usuario y password";
	}else{
		
		$conexion = ConectarBBDD("seguridad");
		if ($conexion){
			
			$resultado = EjecutarSQL($conexion,"select ORDEN from USUARIO where LOGIN= '".$_POST["usuario"]."' AND PASSWORD = '".$_POST["password"]."';");

			if ($depurar) PintaTabla($resultado);

			if ($resultado) {
				$validacion = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
				if ($validacion){

					session_start();
					$_SESSION["user-session"] = session_id();
					$_SESSION["user"] = $_POST["usuario"];
					//$_SESSION["pass"] = $_POST["password"];

					mensaje("Usuario correcto.");

					echo "<head><meta http-equiv='refresh' content='1; url=listardatos.php'></head>";

				} else {
					mensaje("Login incorrecto. Vuelva a intentarlo.");
					echo "<head><meta http-equiv='refresh' content='8; url=login.html'></head>";
				}

				if ($depurar) PintaTabla($validacion);
			}

		}
	}
}
?>