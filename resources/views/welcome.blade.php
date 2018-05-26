<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <title>Administracion Conjuntos</title>
    </head>
    <body>
        <header>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Administracion Conjuntos</a>
              </div>
              @if (Route::has('login'))
                @auth
                  <div class="navbar-header">
                    <a href="{{ url('/home') }}">Home</a>
                  </div>
                @else
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                      <li><a href="{{ route('register') }}">Registrase</a></li>
                    </ul>
                @endauth
              @endif
            </div>
          </nav>
        </header>
        <article>
          <div class="full-container">
            
            <div id="jrCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#jrCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#jrCarousel" data-slide-to="1"></li>
                  <li data-target="#jrCarousel" data-slide-to="2"></li>
                </ol>
              
                <!-- Wrapper for slides --> 
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ asset('img/administracion_1.jpg') }}" class="img-carousel img-responsive" alt="admin-5">
                  </div>
              
                  <div class="item">
                    <img src="{{ asset('img/administracion_2.jpg') }}" class="img-carousel img-responsive" alt="admin-6">
                  </div>
              
                  <div class="item">
                    <img src="{{ asset('img/administracion_3.jpg') }}" class="img-carousel img-responsive" alt="admin-1">
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#jrCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#jrCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </article>
    </body>
</html>
