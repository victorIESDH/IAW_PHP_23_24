<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login para sesiones</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <?php
     if (isset($_cookie["usuario"]))
     {
        $usuario_recuerdo = $_cookie["usuario"];
     }
     else
     {
      $usuario_recuerdo = "";
     } 
    ?>
    <div class="container">
    <div class="row">
    <main class="form-signin w-100 m-auto">
      <form action="login.php" method="post" >
        <h1 class="h3 mb-3 fw-normal">Validar credenciales</h1>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" value="<?php echo $usuario_recuerdo ?>" name="usuario" required="yes" >
          <label for="floatingInput">Usuario</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Indique constraseña" name="password" required="yes">
          <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="recordar"> Recordar
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="validar">Validar datos</button>
        <p class="mt-5 mb-3 text-muted">Cuadrante de falta de profesores</p>
      </form>
    </main>
    </div>
    <div class="row">
  <?php
  include ("comunes.php");
   if (isset($_POST['validar']))
    {
        //var_dump($_POST);
        if (!empty($_POST["usuario"]) && !empty($_POST["password"]))
        {
            //validamos credenciales y creamos una sessión en caso afirmativo.
            $perfil_acceso = "";
            if (fValidaAcceso($_POST["usuario"],$_POST["password"],$perfil_acceso))
            {
                //echo "<p>Los datos son correctos.</p>";
                if (isset($_POST['recordar'])) 
                {
                  setcookie("usuario",$_POST["usuario"]);
                }
                
                session_start();
                echo session_id();
                $_SESSION["session_id"] = session_id();
				        $_SESSION["usuario_session"] = $_POST["usuario"];  
                $_SESSION["perfil_session"] = $perfil_acceso;
                header("location:principal.php");
                exit();
            }
            else
            {
                echo "<p>Los datos son incorrectos, vuelta a introducirlos.</p>";
            }
        }
    }
    ?>
    </div>
    </body>
</html>



