<?php

namespace App\Http\Controllers\Lista;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;


class Productos extends Controller
{
    public function listado(){
        
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precioProducto','pro.cantidadProducto','pro.nombreProducto', 'pro.fotoProducto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.id','asc')
                    ->get();
        return view('inventario.productos.productos', ['productos' => $productos]);
    }

    public function porProducto(){
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precioProducto','pro.nombreProducto','pro.cantidadProducto', 'pro.fotoProducto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.nombreProducto','asc')
                    ->get();
        return view('inventario.productos.productos', ['productos' => $productos]);
    }
    
    public function porCategoria(){
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precioProducto','pro.nombreProducto','pro.cantidadProducto', 'pro.fotoProducto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.categoria','asc')
                    ->get();
        return view('inventario.productos.productos', ['productos' => $productos]);
    }

    public function porPrecio(){
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precioProducto','pro.nombreProducto','pro.cantidadProducto', 'pro.fotoProducto', 'cat.nombreCategoria', 'pro.categoria')
                    ->orderby('pro.precioProducto','asc')
                    ->get();
        return view('inventario.productos.productos', ['productos' => $productos]);
    }

    public function detalle($id) {
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precioProducto','pro.cantidadProducto','pro.nombreProducto', 'pro.fotoProducto', 'cat.nombreCategoria', 'pro.categoria')
                    ->where('pro.id',"$id")
                    ->first(); 
        return view('inventario.productos.detalle', ['productos' => $productos]);

    }

    public function formulario_registrar(){
        $categorias = Categoria::all();
        return view('inventario.productos.form_registro', compact('categorias'));
    }

    public function registrar(Request $request){
        /*$repetido = Producto::where('codigoProducto',$request->input('Cod'))->count();
        if($repetido == 0){*/
            $producto = new Producto();
            $producto->nombreProducto = $request->input('nombrePro');
            $producto->cantidadProducto = $request->input('cantidadPro');
            $producto->precioProducto = $request->input('precioPro');
            if($request->hasFile('urlfoto')){
                $file = $request->file("urlfoto");
                $nombrearchivo = $file->getClientOriginalName();
                $file->move(public_path("/assets/img/productos/"),$nombrearchivo);
                $producto->fotoProducto = $nombrearchivo;
            }
            $producto->categoria = $request->input('categorias');
            $producto->save();
            return redirect()->route('listadoProductos');
        /*}else{
            return view('inventario.productos.repetido');
        }*/
    }

    public function formulario_actualizar($id){
        $producto = Producto::findOrFail($id);
        $category = Categoria::all();
        return view('inventario.productos.form_actualiza', compact('producto','category'));
    }

    public function actualizar(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        if($request->hasFile('urlfoto')){
            $file = $request->file("urlfoto");
            $nombrearchivo = $file->getClientOriginalName();
            $file->move(public_path("/assets/img/productos/"),$nombrearchivo);
            $producto->fotoProducto = $nombrearchivo;
        }
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoProductos');
    }

    public function eliminar($id){
        $product = Producto::findOrFail($id);
        $product->delete();
        return view('inventario.productos.confirmacion');
    }

    public function formulario_consultar(){
       return view('inventario.productos.form_consulta');
    }

    public function consultar(Request $request){
       $codigo = $request->input('codigo');

       $producto = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.precioProducto','pro.nombreProducto', 'pro.fotoProducto','pro.cantidadProducto', 'pro.categoria','cat.nombreCategoria')
                    ->where('pro.id', "$codigo")
                    ->first();
       if($producto)
            return view('inventario.productos.resultado', ['producto' => $producto]);
        else
            return view('inventario.productos.mensaje');
            
    }
}