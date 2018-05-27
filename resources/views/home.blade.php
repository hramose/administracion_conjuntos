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
              <img class="card-img-top" src="{{ asset('img/eje1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Administrar facturas</h5>
                  <p class="card-text">En esta sección podrás generar y administrar las facturas de cambio.</p>
                  <a href="#" class="btn btn-primary">ir a administrar</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/eje2.jpg') }}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Perfil</h5>
                  <p class="card-text">Para editar mi información básica y contraseña</p>
                  <a href="#" class="btn btn-primary">Ir a mi perfil</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/eje4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Estado de Cuenta</h5>
                  <p class="card-text">Aquí podras revisar los últimos pagos realizados y mi resumen de mi estado de cuenta actual.</p>
                  <a href="#" class="btn btn-primary">Ir a mis estado de cuenta</a>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
