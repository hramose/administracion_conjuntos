@extends('layouts.app')

@section('content')
<article>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="{{ asset('img/administracion_1.jpg') }}" class="img-carousel img-responsive" alt="admin-5">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/administracion_2.jpg') }}" class="img-carousel img-responsive" alt="admin-6">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/administracion_3.jpg') }}" class="img-carousel img-responsive" alt="admin-1">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>  
  </div>

  
</article>
@endsection