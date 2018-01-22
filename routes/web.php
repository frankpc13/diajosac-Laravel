<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/marcas',function (){
    return view('marcas');
});
Route::get('/normas',function(){
    return view('normas');
});
Route::get('/productos',function (){
    return view('productos');
});
Route::get('/normas/cascos_proteccion',function (){
   return view('cascos_de_proteccion');
});
Route::get('/normas/proteccion_auditiva',function (){
    return view('auditiva');
});
Route::get('/normas/proteccion_visual',function (){
    return view('visual');
});
Route::get('/normas/proteccion_respiratoria',function (){
    return view('respira');
});
Route::get('/normas/guantes_proteccion',function (){
    return view('guantes');
});
Route::get('/normas/trajes_proteccion',function (){
    return view('traje');
});
//admin mode
Route::get('/nuevo-producto','ProductoController@crearProducto')->middleware('auth');
Route::get('/lista','ProductoController@listaProducto')->middleware('auth');
Route::get('/editar-producto/{id}','ProductoController@detalleProducto')->middleware('auth');
//user-mode
Route::get('/login',function (){
   return view('login');
});
//user-mode
Route::get('/logout','ApiController@cerrarSesion');
Route::get('/productos/{id}','ProductoController@productosPorTipo');
Route::get('/productos/marcas/{id}','ProductoController@productosPorMarca');
Route::post('/sesion','ApiController@login');

Route::Resource('/marcas','MarcaController');
Route::Resource('/productos','ProductoController');

//admin mode
Route::post('/editar/{id}','ProductoController@actualizarProducto')->middleware('auth');
Route::post('/create','ProductoController@nuevoProducto')->middleware('auth');
Route::post('/borrar-producto/{id}','ProductoController@borrarProducto')->middleware('auth');