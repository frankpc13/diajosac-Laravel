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
    //carga de pagina de inicio
    public function index(){
        $producto=Producto::orderBy('nombre')->paginate(8);
        $nombre=null;
        $tipo=Tipo::all();
        $resultados=Producto::orderBy('nombre')->paginate(8)->count();
        $total=Producto::all()->count();
        $marca=Marca::all();
        return view('productos',compact('tipo','marca','producto','resultados','total'));
    }

    //implementación de la busqueda para el buscador de productos
    public function buscarProducto($nombre){
        $marca=Marca::all();
        $tipo=Tipo::all();
        $auxMarca=Marca::where('nombre','like',"%{$nombre}%")->get()->first();
        $auxTipo=Tipo::where('nombre','like',"%{$nombre}%")->get()->first();
        if(is_null($auxMarca) && !is_null($auxTipo)){
            $producto=Producto::where('nombre','like',"%{$nombre}%")->orWhere('Tipo_id',$auxTipo->id)->paginate(8);
            $resultados=Producto::where('nombre','like',"%{$nombre}%")->orWhere('Tipo_id',$auxTipo->id)->paginate(8)->count();
            $total=Producto::all()->count();
            return view('productos',compact('tipo','marca','producto','resultados','total'));
        }
        if(is_null($auxTipo) && !is_null($auxMarca)){
            $producto=Producto::where('nombre','like',"%{$nombre}%")->orWhere('Marca_id',$auxMarca->id)->paginate(8);
            $resultados=Producto::where('nombre','like',"%{$nombre}%")->orWhere('Marca_id',$auxMarca->id)->paginate(8)->count();
            $total=Producto::all()->count();
            return view('productos',compact('tipo','marca','producto','resultados','total'));
        }else{
            $producto=Producto::where('nombre','like',"%{$nombre}%")->paginate(8);
            $resultados=Producto::where('nombre','like',"%{$nombre}%")->paginate(8)->count();
            $total=Producto::all()->count();
            return view('productos',compact('tipo','marca','producto','resultados','total'));
        }
    }

    //metodo para agregar nuevo producto
    public function nuevoProducto(Request $request){
        $nuevo = new Producto();
        $nuevo->nombre = $request->get('nombre_producto');
        $nuevo->codigo = $request->get('codigo_producto');
        //ingreso de descripcion
        $nuevo->descripcion=$request->get('descripcion_producto');
        $marca=Marca::where('nombre','like',$request->get('marca_producto'))->get()->first();
        $tipo=Tipo::where('nombre','like',$request->get('tipo_producto'))->get()->first();

        $nuevo->Tipo_id=$tipo->id;
        $nuevo->Marca_id=$marca->id;

        //ingreso de archivo pdf
        if($request->hasFile('ficha_producto')&& $request->file('ficha_producto')->isValid()){
            $pdf=$request->file('ficha_producto');
            $nombrepdf="{$request->input('codigo_producto')}".".pdf";
            Storage::disk('fichas')->put($nombrepdf,File::get($pdf));
            $nuevo->ficha_tecnica=$nombrepdf;
        }

        if ($request->hasFile('imagen_producto') && $request->file('imagen_producto')->isValid()) {
            $imagen = $request->file('imagen_producto');
            //$filename = $request->file('imagen_producto')->getClientOriginalName();
            $filename="{$request->input('codigo_producto')}".".jpg";
            $imagen_resize=Image::make($imagen->getRealPath());
            $imagen_resize->resize(500,500);

            //Storage::disk('images')->put($filename, File::get($imagen_resize));
            $imagen_resize->save(public_path('images/'.$filename));
            $nuevo->imagen = $filename;
        }
        $nuevo->save();

        return redirect('/admin/lista');
        //}//
    }

    //metodo para obtener los datos de un producto en especifico
    public function detalleProducto($id){
        $producto=Producto::find($id);
        $marca=Marca::all();
        $tipo=Tipo::all();


            return view('editar-producto',compact('marca','tipo'))->with('producto',$producto);

    }

    public function detalleProductoLista($codigo){
        $producto=Producto::where('codigo',$codigo)->get()->first();

        return view('/detalle-producto')->with('producto',$producto);
    }

    //metodo para poder actualizar los datos de un producto
    public function actualizarProducto(Request $request,$id){
            $producto = Producto::find($id);

            $producto->nombre = $request->get('nombre_producto');

            $marca = Marca::where('nombre', 'like', $request->get('marca_producto'))->get()->first();
            $producto->Marca_id = $marca->id;

            $producto->codigo = $request->get('codigo_producto');

            $tipo = Tipo::where('nombre', 'like', $request->get('tipo_producto'))->get()->first();
            $producto->Tipo_id = $tipo->id;

            $producto->descripcion=$request->get('descripcion_producto');
            //editar pdf
            if($request->hasFile('ficha_producto')&& $request->file('ficha_producto')->isValid()){
                if(Storage::disk('fichas')->exists($producto->ficha_tecnica)){
                    Storage::disk('fichas')->delete($producto->ficha_tecnica);
                }
                $pdf=$request->file('ficha_producto');
                $nombrepdf="{$request->input('codigo_producto')}".".pdf";
                Storage::disk('fichas')->put($nombrepdf,File::get($pdf));
                $producto->ficha_tecnica=$nombrepdf;
            }
            if ($request->hasFile('imagen_producto') && $request->file('imagen_producto')->isValid()) {
                if(Storage::disk('images')->exists($producto->imagen)){
                    Storage::disk('images')->delete($producto->imagen);
                }
                $imagen = $request->file('imagen_producto');
                /*$filename = $request->file('imagen_producto')->getClientOriginalName();*/
                $filename="{$request->input('codigo_producto')}".".jpg";
                $imagen_resize=Image::make($imagen->getRealPath());
                $imagen_resize->resize(500,500);

                //Storage::disk('images')->put($filename, File::get($imagen_resize));
                $imagen_resize->save(public_path('images/'.$filename));
                $producto->imagen = $filename;
            }
            $producto->save();

            return redirect()->intended("/admin/lista");
        //}
    }

    public function borrarProducto($id)
    {
        $producto = Producto::find($id);
        if(Storage::disk('fichas')->exists($producto->ficha_tecnica)){
            Storage::disk('fichas')->delete($producto->ficha_tecnica);
        }else{
            echo "no existe la ficha tecnica";
        }
        if(Storage::disk('images')->exists($producto->imagen))
        {
            Storage::disk('images')->delete($producto->imagen);

        }else{
            echo "no funciona el borrado";
        }
        $producto->delete();
        return redirect("/admin/lista");
    }

    public function productosPorTipo($codigo){
        $tipoNombre=Tipo::where('codigo','like',$codigo)->get()->first();
        $producto=Producto::where('Tipo_id',$tipoNombre->id)->orderBy('nombre')->paginate(8);

        $tipo=Tipo::all();
        $resultados=Producto::where('Tipo_id',$tipoNombre->id)->orderBy('nombre')->paginate(8)->count();
        $total=Producto::all()->where('Tipo_id',$tipoNombre->id)->count();
        $marca=Marca::all();
        return view('productos',compact('tipo','marca','producto','resultados','total'));
    }

    public function productosPorMarca($codigo){
        $nombreMarca=Marca::where('codigo','like',$codigo)->get()->first();
        $producto=Producto::where('Marca_id',$nombreMarca->id)->orderBy('nombre')->paginate(8);

        $marca=Marca::all();
        $tipo=Tipo::all();
        $resultados=Producto::where('Marca_id',$nombreMarca->id)->orderBy('nombre')->paginate(8)->count();
        $total=Producto::all()->where('Marca_id',$nombreMarca->id)->count();
        return view('productos',compact('tipo','marca','producto','resultados','total'));
    }

    public function listaProducto(){
        $producto=Producto::all();

        return view('lista',['productos'=>$producto]);
    }

    public function crearProducto(){
        $tipo=Tipo::all();
        $marca=Marca::all();

        return view('nuevo-producto',compact('tipo','marca'));
    }
}
