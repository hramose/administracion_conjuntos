@extends('layouts.app')

@section('content')

  <div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul class="nav nav-tabs" id="tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="historico-tab" data-toggle="tab" href="#historico" role="tab" aria-controls="historico" aria-selected="true">historico</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="historico" role="tabpanel" aria-labelledby="historico-tab">
        <br><br>
        <div class="row">
            <div class="col-md-12">
              <h2 class="">Historico de Facturas</h2>
            </div>
        </div>
        <hr>  
        <div class="row">
           <br>
           <div class="col-md-12">
             <table class="table table-bordered">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">Fecha Pago</th>
                   <th scope="col">Numero de recaudo</th>
                   <th scope="col">Numero de vivienda</th>
                   <th scope="col">Forma de pago</th>
                   <th scope="col">Valor Pagado</th>
                   <th scope="col">Comprobante de pago</th>
                   <th scope="col">Intereses</th>
                 </tr>
               </thead>
               @foreach($facturas as $factura)
                 <tbody id="datos">
                   <td>{{$factura->fecha_recaudo}}</td>
                   <td>{{$factura->numero_recaudo}}</td>
                   <td>{{$factura->id_vivienda}}</td>
                   <td>{{$factura->f_pago}}</td>
                   <td>{{$factura->valor_recaudo}}</td>
                   <td>{{$factura->numero_comprobante}}</td>
                   <td>{{$factura->intereses}}</td>
                 </tbody>
               @endforeach
             </table>
             
           </div>
         </div>
      </div>
    </div>
    

    

  </div>
@endsection
