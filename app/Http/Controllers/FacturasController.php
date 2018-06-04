<?php

namespace Administracion_conjunto\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $facturas = \Administracion_conjunto\FacturasModel::All();
        $viviendas = DB::table('vivienda')->get();   
        return view('HistoricoFactura/historico',compact('facturas'),['viviendas'=>$viviendas]);
    }
    public function listing()
    {
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_factura');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Administracion_conjunto\FacturasModel::create([
            'numero_recaudo'=>$request['txt_numero_recaudo'],
            'id_vivienda'=>$request['txt_numero_vivienda'],
            'f_pago'=>$request['txt_f_pago'],
            'valor_recaudo'=>$request['txt_valor_recaudo'],
            'numero_comprobante'=>$request['txt_numero_comprobante'],
            'fecha_recaudo'=>$request['txt_fecha_recaudo'],
            'intereses'=>$request['txt_interes']

        ]); 
        return "factura agregada";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
