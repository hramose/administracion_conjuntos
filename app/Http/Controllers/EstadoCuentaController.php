<?php

namespace Administracion_conjunto\Http\Controllers;

use Illuminate\Http\Request;

class EstadoCuentaController extends Controller
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
      $estado = \Administracion_conjunto\EstadoCuentaModel::All(); 
      return view('EstadoCuenta/cuenta',compact('estado'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuenta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $db = DataBase::singleton();
        // $respuesta = array();
        // $consulta = $db-executeQue("insert into vivienda (name,perfil_usuario)) values($name)");

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
        // $db = Database::singleton();
        // $consulta = $db-executeQue("delete from vivienda where idname =$name");
        // if ($consula) {
        //   echo('<div class="alert alert-success" role="alert"><strong>Se ha elimiando el producto</strong></div>');
        // }else {
        //   	echo('<div class="alert alert-danger" role="alert"><strong>Hubo un error :(</strong></div>');
        // }
    }
}
