@extends('layouts.app')

@section('content')
<article>
  <div>
    
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
@endsection