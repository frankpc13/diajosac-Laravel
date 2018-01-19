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
Route::get('/nuevo-producto','ProductoController@crearProducto');

Route::get('/lista','ProductoController@listaProducto')->middleware('auth');
Route::get('/editar-producto/{id}','ProductoController@detalleProducto')->middleware('auth');
Route::get('/login',function (){
   return view('login');
});
Route::get('/logout','ApiController@cerrarSesion');
Route::get('/productos/{id}','ProductoController@productosPorTipo');
Route::get('/productos/marcas/{id}','ProductoController@productosPorMarca');
Route::post('/sesion','ApiController@login');
//Route::Resource('/lista','ProductoController@listaProducto');
Route::Resource('/marcas','MarcaController');

Route::Resource('/productos','ProductoController');

Route::post('/editar/{id}','ProductoController@actualizarProducto');
Route::post('/create','ProductoController@nuevoProducto');
Route::post('/borrar-producto/{id}','ProductoController@borrarProducto');