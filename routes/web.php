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
Route::get('/marcas','MarcaController@index');
Route::get('/normas',function(){
    return view('normas');
});
Route::get('/productos','ProductoController@index');
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
Route::get('/admin/nuevo-producto','ProductoController@crearProducto')->middleware('auth');
Route::get('/admin/lista','ProductoController@listaProducto')->middleware('auth');
Route::get('/admin/editar-producto/{id}','ProductoController@detalleProducto')->middleware('auth');
//user-mode
Route::get('/admin/login',function (){
   return view('login');
});
//user-mode
Route::get('/productos/detalle/{nombre}','ProductoController@detalleProductoLista');
Route::get('/productos/buscar/{nombre}','ProductoController@buscarProducto');
Route::get('/productos/tipos/{nombre}','ProductoController@productosPorTipo');
Route::get('/productos/marcas/{nombre}','ProductoController@productosPorMarca');
Route::post('/productos/buscar/{nombre}','ProductoController@buscarProducto');

//admin mode
Route::post('/admin/sesion','ApiController@login');
Route::post('/admin/editar/{id}','ProductoController@actualizarProducto')->middleware('auth');
Route::post('/admin/create','ProductoController@nuevoProducto')->middleware('auth');
Route::get('/admin/borrar-producto/{id}','ProductoController@borrarProducto')->middleware('auth');
Route::get('/admin/logout','ApiController@cerrarSesion');

//test de mail
Route::post('enviar-correo',function (\Illuminate\Http\Request $request,Illuminate\Mail\Mailer $mailer){
    $mailer->to('paul.frankpc@gmail.com')
        ->send(new \App\Mail\Consulta($request->input('email_usuario'),$request->input('nombre_usuario'),
            $request->input('apellido_usuario'),$request->input('telefono_usuario'),$request->input('consulta_usuario')));
    return redirect()->back();
});