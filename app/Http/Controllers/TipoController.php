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
}
