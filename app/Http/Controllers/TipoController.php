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

    //function to find a type with the value id of a product
    public function productosPorTipo($id){
        $producto=Producto::all()->find($id);

        return view('productos',['productos'=>$producto]);
    }

    //function to show a list a type of products
    public function listaTipo(){
        $tipo=Tipo::all();
        return view('/admin/lista-tipo',['tipos'=>$tipo]);
    }

    //function to delete a type of product
    public function borrarTipo($id){
        $tipo=Tipo::find($id);
        $tipo->delete();
        return view('/admin/lista-tipo');
    }

    public function detalleTipo($id){
        $tipo=Tipo::find($id);
        return view('/admin/editar-tipo')->with('tipo',$tipo);
    }
    //function to edit a type a product
    public function editarTipo(Request $request,$id){
        $tipo=Tipo::find($id);
        $tipo->nombre=$request->input('nombre-tipo');
        $tipo->codigo=$request->input('codigo-tipo');
        $tipo->introduccion=$request->input('intro-tipo');

        $tipo->save();

        return redirect('/admin/lista-tipo');

    }

    //function to create a type of a product
    public function nuevoTipo(Request $request){
        $tipo=new Tipo();

        $tipo->nombre=$request->input('nombre-tipo');
        $tipo->codigo=$request->input('codigo-tipo');
        $tipo->save();

        return redirect('/admin/lista-tipo');
    }
}
