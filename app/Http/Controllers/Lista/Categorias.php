<?php

namespace App\Http\Controllers\Lista;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;
use App\Models\Producto;

class Categorias extends Controller
{
    public function listado(){
        
        $category = Categoria::all();
        return view('inventario.categorias.listado', ['categorias' => $category]);   
    }

    public function formulario_registrar()
    {
        //Mostrar el formulario de registro y la captura de datos
        return view('inventario.categorias.form_registro');
    }
  
    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
         /*$repetido = Categoria::where('codigoCategoria',$request->input('Cod'))->count();
        if($repetido == 0){*/
            $category = new Categoria();
            $category->nombreCategoria = $request->input('nombreCat');
            $category->descripcion = $request->input('descripcionCat');
            $category->save();
            return redirect()->route('listadoCategorias');
         /*}else{
            return view('inventario.categorias.repetido');
        }*/
    }

    public function formulario_actualizar($id){
        $category = Categoria::findOrFail($id);
        return view('inventario.categorias.form_actualiza', compact('category'));
    }

    public function actualizar(Request $request, $id)
    {
        $category = Categoria::findOrFail($id);
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listadoCategorias');
    }

    public function eliminar($id)
    {
        $foreign = Producto::where('categoria',$id)->count();
        if($foreign == 0){
            $category = Categoria::findOrFail($id);
            $category->delete();
            return view('inventario.categorias.confirmacion');
        }else{
            $category = Categoria::findOrFail($id);
            return view('inventario.categorias.foranea', compact('category'), ['foranea'=> $foreign]);
        }
    }
}
