@extends('layouts.app')

@section('content')

  <div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- <h1>Bienvenido al estado de cuenta</h1>
    <p class="lead">Aquí podrás consultar los pagos realizados</p>

      <hr>

    <h3>Estado de cuenta</h3>
    <p>Recuerda que aquí podrás ver el estado decuenta de todos tus pagos anteriores que han sido registrados</p>

    <div class="row">
      <div class="col-md-4"><strong>Año</strong></div>
      <div class="col-md-4"><strong>Mes</strong></div>
      <div class="col-md-4"><strong>Monto</strong></div>
    </div>
    <div class="row">
      <div class="col-md-4">2016</div>
      <div class="col-md-4">Enero</div>
      <div class="col-md-4">$748.500</div>
      <div class="col-md-4">2016</div>
      <div class="col-md-4">Febrero</div>
      <div class="col-md-4">$749.500</div>
      <div class="col-md-4">2016</div>
      <div class="col-md-4">Marzo</div>
      <div class="col-md-4">$750.500</div>
      <div class="col-md-4">2016</div>
      <div class="col-md-4">Abril</div>
      <div class="col-md-4">$748.500</div>
    </div>

    <hr>

    <h3>Recuerda siempre pagar a tiempo.</h3>

  </div> -->

  <div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Estado de cuenta</h2><h3 class="pull-right">Conjunto residencial Prado veraniego</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Cuenta para:</strong><br>
    					Larry Smith<br>
    					Calle 127 #50-45<br>
    					Apt 205<br>
    					Bogotá, Colombia
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Metodo de pago:</strong><br>
    					Efectivo<br>
    					lsmith@email.com
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Orden generado:</strong><br>
    					Mayo 25, 2018<br><br>
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
    								<td>2017</td>
    								<td class="text-center">Abril</td>
    								<td class="text-right">$105.990</td>
    							</tr>
                                <tr>
        							<td>2017</td>
    								<td class="text-center">Marzo</td>
    								<td class="text-right">$106.000</td>
    							</tr>
                                <tr>
            						<td>2017</td>
    								<td class="text-center">Febrero</td>
    								<td class="text-right">$105.000</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">$316.990</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Intereses</strong></td>
    								<td class="no-line text-right">$2.500</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">$319.490</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection
