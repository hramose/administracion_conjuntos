<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Esta es la pagina de Registro">
    <meta name="author" content="Alexander y Leonardo">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="resources/assets/estilos-register.scss" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Registro Administrativo</title>
  </head>
  <body>
    <!-- Aquí esta creando un modal para el registro de los nuevos usuarios -->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="registermodal-container">
          <h1>Registro de usuarios </h1><br></br>
          <form>
            <input type="text" name="nombre" placeholder="Nombre completo">
            <input type="email" name="correo" placeholder="Ingrese su email">
            <input type="number" name="telefono" placeholder="Ingrese su telefono">
            <input type="text" name="residencia" placeholder="Ingrese su residencia">
            <input type="text" name="usuario" placeholder="Cree su usuario">
          </form>

          <div class="register-help">
            <a href="#">Ingresar </a> - <a href="#"> ¿Olvidó su contraseña? </a>
        </div>
      </div>
    </div>
  </body>
</html>
