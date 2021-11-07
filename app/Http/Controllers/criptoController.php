<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lenguajeprogramacion;

class criptoController extends Controller
{
    
    public function criptoform(){
        $lenguajeprogramacions= lenguajeprogramacion::all();
        return view('criptomoneda.criptoform', compact('lenguajeprogramacions'));
    }
    public function save(Request $request){
        $validator = $this->validate($request, [
            'logotipo'=> 'required',
            'nombre'=> 'required|string|max:255',
            'precio'=> 'required|string',
            'descripcion_'=> 'required|string|max:255',
            'lenguaje_id'=> 'required',
        ]);
        $criptodata = request()->except('_token');
        if($request->hasFile('logotipo')){
            $criptodata['logotipo']=$request->file('logotipo')->store('uploads', 'public');
        }
        \App\Models\criptomoneda::insert($criptodata);
        return back()->with('datosguardados','Dato Guardado');
    }
}
