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
            <div class="col-md-11">
              <h2 class="">Historico de Facturas</h2>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i></button>
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
                   <th scope="col">Acción</th>
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
                   <td><a class="btn btn-info" href="{{ route('cuenta') }}"><i class="fas fa-search"></i> Ver</a></td>
                 </tbody>
               @endforeach
             </table>
             
           </div>
         </div>
      </div>
    </div>
    
    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Factura</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('historicoCuenta.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-2">
                    <label for="txt_fecha_recaudo">Fecha de pago</label>
                  </div>
                  <div class="col-md-4">
                    <input type="date" name="txt_fecha_recaudo" id="txt_fecha_recaudo" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <label for="txt_numero_recaudo">Numero de recaudo</label>
                  </div>
                    <div class="col-md-4">
                      <input type="number" name="txt_numero_recaudo" id="txt_numero_recaudo" class="form-control">
                    </div>
                  <div class="col-md-2">
                    <label for="txt_numero_vivienda">Numero de Vivienda</label>
                  </div>
                  <div class="col-md-4">
                    <select name="txt_numero_vivienda" id="txt_numero_vivienda" class="form-control">
                      <option value=""></option>
                      @foreach($viviendas as $vivienda)
                          <option value="{{$vivienda->id_vivienda}}">{{$vivienda->id_vivienda}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <label for="txt_f_pago">Forma de pago</label>
                  </div>
                  <div class="col-md-4">
                    <select name="txt_f_pago" id="txt_f_pago" class="form-control">
                      <option value=""></option>
                      <option value="Efectivo">Efectivo</option>
                      <option value="Tarjeta de Credito">Tarjeta de Credito</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="txt_valor_recaudo">Valor Factura</label>
                  </div>
                  <div class="col-md-4">
                    <input type="number" name="txt_valor_recaudo" id="txt_valor_recaudo" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <label for="txt_numero_comprobante">Numero de comprobante</label>
                  </div>
                  <div class="col-md-4">
                      <input type="number" name="txt_numero_comprobante" id="txt_numero_comprobante" class="form-control">
                  </div>
                  <div class="col-md-2">
                    <label for="txt_interes">Intereses</label>
                  </div>
                  <div class="col-md-4">
                    <input type="number" name="txt_interes" id="txt_interes" class="form-control">
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <input class="btn btn-success" type="submit" name="btn_enviar" id="btn_enviar" value="Agregar Factura">
            </div>
          </form>
        </div>
      </div>
    </div>

    

  </div>
@endsection
