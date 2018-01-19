<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class ProductoController extends Controller
{
    //
    public function index(){
        $producto=Producto::orderBy('nombre')->paginate(8);

        $tipo=Tipo::all();
        $resultados=Producto::orderBy('nombre')->paginate(8)->count();
        $total=Producto::all()->count();
        return view('productos',compact('tipo','producto','resultados','total'));
    }

    public function nuevoProducto(Request $request){
        $nuevo = new Producto();
        $nuevo->nombre = $request->get('nombre_producto');
        $nuevo->codigo = $request->get('codigo_producto');
        //$nuevo->Tipo_id = $request->get('tipo_producto');
        //$nuevo->Marca_id = $request->get('marca_producto');

        $marca=Marca::where('nombre','like',$request->get('marca_producto'))->get()->first();
        $tipo=Tipo::where('nombre','like',$request->get('tipo_producto'))->get()->first();

        $nuevo->Tipo_id=$tipo->id;
        $nuevo->Marca_id=$marca->id;

        if ($request->hasFile('imagen_producto') && $request->file('imagen_producto')->isValid()) {
            $imagen = $request->file('imagen_producto');
            $filename = $request->file('imagen_producto')->getClientOriginalName();
            $imagen_resize=Image::make($imagen->getRealPath());
            $imagen_resize->resize(500,500);

            //Storage::disk('images')->put($filename, File::get($imagen_resize));
            $imagen_resize->save(public_path('images/'.$filename));
            $nuevo->imagen = $filename;
        }
        $nuevo->save();

        return redirect('/lista');
        //}//
    }

    public function detalleProducto($id){
        $producto=Producto::find($id);
        $marca=Marca::all();
        $tipo=Tipo::all();


            return view('editar-producto',compact('marca','tipo'))->with('producto',$producto);

    }

    public function actualizarProducto(Request $request,$id){
       /* if(!$request->has('nombre_producto'||!$request->has('codigo_producto')||!$request->has('tipo_producto')
            ||!$request->has('marca_producto'))){
            echo "perro";
            return redirect("/lista");
        }else {*/
            $producto = Producto::find($id);

            $producto->nombre = $request->get('nombre_producto');

            $marca = Marca::where('nombre', 'like', $request->get('marca_producto'))->get()->first();
            $producto->Marca_id = $marca->id;

            $producto->codigo = $request->get('codigo_producto');

            $tipo = Tipo::where('nombre', 'like', $request->get('tipo_producto'))->get()->first();
            $producto->Tipo_id = $tipo->id;

            if ($request->hasFile('imagen_producto') && $request->file('imagen_producto')->isValid()) {
                $imagen = $request->file('imagen_producto');
                $filename = $request->file('imagen_producto')->getClientOriginalName();
                $imagen_resize=Image::make($imagen->getRealPath());
                $imagen_resize->resize(500,500);

                //Storage::disk('images')->put($filename, File::get($imagen_resize));
                $imagen_resize->save(public_path('images/'.$filename));
                $producto->imagen = $filename;
            }
            $producto->save();

            return redirect()->intended("/lista");
        //}
    }

    public function borrarProducto($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect("/lista");
    }

    public function productosPorTipo($id){
        $producto=Producto::where('Tipo_id',$id)->orderBy('nombre')->paginate(8);

        $tipo=Tipo::all();
        $resultados=Producto::where('Tipo_id',$id)->orderBy('nombre')->paginate(8)->count();
        $total=Producto::all()->where('Tipo_id',$id)->count();
        return view('productos',compact('tipo','producto','resultados','total'));
    }

    public function productosPorMarca($id){
        $producto=Producto::where('Marca_id',$id)->orderBy('nombre')->paginate(8);

        $tipo=Tipo::all();
        $resultados=Producto::where('Marca_id',$id)->orderBy('nombre')->paginate(8)->count();
        $total=Producto::all()->where('Marca_id',$id)->count();
        return view('productos',compact('tipo','producto','resultados','total'));
    }

    public function listaProducto(){
        $producto=Producto::all();

        return view('lista',['productos'=>$producto]);
    }

    public function crearProducto(){
        $tipo=Tipo::all();
        $marca=Marca::all();

        return view('/nuevo-producto',compact('tipo','marca'));
    }
}
