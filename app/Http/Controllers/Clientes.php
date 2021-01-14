<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class Clientes extends Controller
{
    public function listado(){

        $client = DB::table('clientes')
        ->orderby('nombreCliente', 'asc')
        ->get();
        return view('clientes.clientela', compact('client')) ;
    }

    public function detalle($id){
        $client = Cliente:: findOrFail($id);
        return view('clientes.detalle', compact('client'));
    }

    public function formulario(){
        return view('clientes.form_registro' ) ;
    }

    public function registrar(Request $request){
        
        $repetidoCedula = Cliente::where('cedulaCliente',$request->input('IdCli'))->count();
        if($repetidoCedula == 0){
            $client = new Cliente();
            $client->nombreCliente = $request->input('nombreCli');
            $client->cedulaCliente = $request->input('IdCli');
            $client->direccionCliente = $request->input('dirCli');
            $client->telefonoCliente = $request->input('telCli');
            $client->generoCliente = $request->input('clientes');
            if($request->hasFile('urlfoto')){
                $file = $request->file("urlfoto");
                $nombrearchivo = $file->getClientOriginalName();
                $file->move(public_path("/assets/img/clientes/"),$nombrearchivo);
                $client->fotoCliente = $nombrearchivo;            
            }
            $client->save();
            return redirect()->route('listadoClientes');
        }else{
            return view('clientes.repetido');
        }
        
    }

    public function formulario_actualizar($id){
        $client = Cliente::findOrFail($id);
        return view('clientes.form_actualiza', compact('client')) ;
    }

    public function actualizar(Request $request, $id){
        $client = Cliente::findOrFail($id);
        $client->nombreCliente = $request->input('nombreCli');
        $client->cedulaCliente = $request->input('IdCli');
        $client->direccionCliente = $request->input('dirCli');
        $client->telefonoCliente = $request->input('telCli');
        $client->generoCliente = $request->input('clientes');
        if($request->hasFile('urlfoto')){
            $file = $request->file("urlfoto");
            $nombrearchivo = $file->getClientOriginalName();
            $file->move(public_path("/assets/img/clientes/"),$nombrearchivo);
            $client->fotoCliente = $nombrearchivo;
        }
        $client->save();
        return redirect()->route('listadoClientes');  
    }

    public function eliminar($id){
        $client = Cliente::findOrFail($id);
        $client->delete();
        return view('clientes.confirmacion');
    }

    public function formulario_consultar(){
        return view('clientes.form_consulta');
    }

    public function consultar(Request $request){
        $cedula = $request->input('cedulaCli');
 
        $client = DB::table('clientes')
                    //->where('nombreCliente', 'like', "%$busca%")
                    ->where('cedulaCliente', "$cedula")
                    ->first();
        if($client)
            return view('clientes.resultado', ['client' => $client]);
         else
            return view('clientes.mensaje');
     }
}
