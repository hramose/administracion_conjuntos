<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/'function (){
//     return view('cuenta');
// })

Route::get('/cuenta', 'EstadoCuentaController@index')->name('cuenta');
Route::resource('historicoCuenta','FacturasController');
Route::get('/historico', 'FacturasController@index')->name('historico');
Route::get('/historico/create', 'FacturasController@create')->name('crearFactura');
Route::post('/historico/store', 'FacturasController@store')->name('storeFactura');

