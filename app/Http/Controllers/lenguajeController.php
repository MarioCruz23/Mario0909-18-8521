<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lenguajeController extends Controller
{
    public function lenguajeform(){
        return view('criptomoneda.lenguajeform');
    }
    public function save2(Request $request){
        $validator = $this->validate($request, [
           'descripcion'=> 'required|string|max:255' 
        ]);
        $lenguajedata = request()->except('_token');
        \App\Models\lenguajeprogramacion::insert($lenguajedata);
        return back()->with('datosguardados','Dato Guardado');
    }
}
