@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-right">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/eje4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/eje4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/eje4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
