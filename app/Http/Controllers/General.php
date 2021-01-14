<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class General extends Controller
{
    //
    public function inicio(){
        return view('inicio');
    }

    public function general(){
        return view('administracion.informacion');
    }

}
