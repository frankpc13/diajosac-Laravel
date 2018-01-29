<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    //
    public function index(){

    }

    public function productosPorTipo($id){
        $producto=Producto::all()->find($id);

        return view('productos',['productos'=>$producto]);
    }

    public function listaTipo(){
        $tipo=Tipo::all();
        return view('lista-tipo',['tipos'=>$tipo]);
    }

    public function borrarTipo($id){
        $tipo=Tipo::find($id);
        $tipo->delete();
        return view('lista-tipo');
    }

    public function editarTipo(Request $request,$id){
        $tipo=Tipo::find($id);
        $tipo->nombre=$request->input('nombre-tipo');
        $tipo->codigo=$request->input('codigo-tipo');

        $tipo->save();

        return redirect('/admin/lista-tipo');

    }

    public function crearTipo(Request $request){
        $tipo=new Tipo();

        $tipo->nombre=$request->input('nombre-tipo');
        $tipo->codigo=$request->input('codigo-tipo');
        $tipo->save();

        return redirect('/admin/lista-tipo');
    }
}
