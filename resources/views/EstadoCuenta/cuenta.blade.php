@extends('layouts.app')

@section('content')

  <div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
  <h1>Bienvenido al estado de cuenta</h1>
  <div class="container">
    @foreach($estado as $estados)
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Estado de cuenta</h2><h3 class="pull-right">Conjunto residencial {{$estados->nombre_conjuinto}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Cuenta para:</strong><br>
    					{{$estados->name}}<br>
    					{{$estados->direccion}}<br>
    					Numero de casa {{$estados->id_vivienda}}<br>
    					Bogotá, Colombia
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Metodo de pago:</strong><br>
    					{{$estados->f_pago}}<br>
    					{{$estados->email}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Orden generado:</strong><br>
    					{{$estados->mes}}/{{$estados->dia}}/{{$estados->anho}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Pagos realizados</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Año</strong></td>
        							<td class="text-center"><strong>Mes</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
        							<td>{{$estados->anho}}</td>
                                    <td>{{$estados->mes}}</td>
                                    <td>{{$estados->valor_recaudo}}</td>
                                </tr>
                                <tr>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">{{$estados->valor_recaudo}}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">{{$estados->valor_recaudo}}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    @endforeach
</div>
@endsection
