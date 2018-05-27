<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <title>Administración Conjuntos</title>

    <!-- Styles -->
</head>
<body>
    <div id="app">
        @guest
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Administración Conjuntos
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endguest
        <div class="wrapper">
            @auth
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Administracion Conjunto</h3>
                        <strong>AC</strong>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">

                                 {{ Auth::user()->name }}
                            </a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="{{ url('/home') }}"><i class="fas fa-home"></i> Inicio</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                     <i class="fas fa-walking"></i>
                                    {{ __('Cerrar sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Administración facturas
                            </a>
                            <a href="#">
                                Estado de cuenta
                            </a>
                        </li>
                </nav>
                <div id="content">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                        <i class="fas fa-align-justify"></i>
                                    </button>
                                </div>
                        </div>
                    </nav>
                </div>
                <main class="py-4">
                    @yield('content')
                </main>
            @endauth
        </div>
        @guest
            <main class="py-4">
                @yield('content')
            </main>
        @endguest
    </div>
<!-- Creando un footer para las paginas-->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Desarrollado con Laravel 5.6. 2018</p>
  </div>
</footer>

    <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
             });
         });
    </script>
</body>
</html>
