<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Esta es la pagina de Login">
    <meta name="author" content="Alexander y Leonardo">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="resources/assets/estilos-login.scss" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Login Adminisrativo</title>
  </head>
  <body>
    <!-- Aquí estoy creando un modal para el ingreso de usuarios -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Ingreso de usuarios</h1><br>
				  <form>
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="contraseña" placeholder="Contraseña">
					<input type="submit" name="login" class="login loginmodal-submit" value="Ingresar">
				  </form>

				  <div class="login-help">
					<a href="#">Registrar</a> - <a href="#">¿Olvidó su contraseña?</a>
				  </div>
				</div>
			</div>
		  </div>
  </body>
</html>
>>>>>>> 0fd2442904656964587baa65d29dedc7c5e66f81
