@extends('layouts.app')

@section('content')

<link href="{{asset('css/side.css')}}" rel="stylesheet">
      <div class="sidenav">
          <a href="#">Administrador</a>
          <a href="#">Clientes</a>
          <a href="#">Estado de cuenta</a>
          <a href="#">Salir</a>
        </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Has iniciado sesión correctamente </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
