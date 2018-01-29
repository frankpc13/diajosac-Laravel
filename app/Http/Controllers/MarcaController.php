<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class MarcaController extends Controller
{
    //

    public function index(){
        $marca=Marca::all();

        return view('marcas',['marcas'=>$marca]);
    }
    public function listaMarca(){
        $marca=Marca::all();

        return view('lista-marcas',['marcas'=>$marca]);
    }

    public function nuevaMarca(Request $request){
        $nuevo=new Marca();
        $nuevo->nombre=$request->input('nombre-marca');
        $nuevo->codigo=$request->input('codigo-marca');
        $nuevo->introduccion=$request->input('intro-marca');
        if($request->hasFile('imagen-marca')&&$request->file('imagen-marca')->isValid()){
            $imagen=$request->file('imagen-marca');
            $filename=$request->file('imagen-marca')->getClientOriginalName();
            $imagen_resize=Image::make($imagen->getRealPath());
            $imagen_resize->resize(500,500);
            $imagen_resize->save(public_path('img/marcas/'.$filename));
            $nuevo->imagen=$filename;
        }
        $nuevo->save();

        return redirect('/admin/lista-marcas');
    }

    public function editarMarca(Request $request,$id){
        $marca=Marca::find($id);
        $marca->nombre=$request->input('nombre-marca');
        $marca->codigo=$request->input('codigo-marca');
        $marca->introduccion=$request->input('intro-marca');
        if($request->hasFile('imagen-marca')&&$request->file('imagen-marca')->isValid()){
            if(Storage::disk('marcas')->exists($marca->imagen)){
                Storage::disk('marcas')->delete($marca->imagen);
            }
            $imagen=$request->file('imagen-marca');
            $filename=$request->file('imagen-marca')->getClientOriginalName();
            $imagen_resize=Image::make($imagen->getRealPath());
            $imagen_resize->resize(500,500);

            $imagen_resize->save(public_path('img/marcas/'.$filename));
            $marca->imagen=$filename;
        }
        $marca->save();

        return redirect('/admin/lista-marcas');
    }

    public function borrarMarca($id){
        $marca=Marca::find($id);
        if(Storage::disk('marcas')->exists($marca->imagen))
        {
            Storage::disk('marcas')->delete($marca->imagen);

        }else{
            echo "no funciona el borrado";
        }
        $marca->delete();

        return redirect('/admin/lista-marcas');
    }
}
