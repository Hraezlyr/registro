<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class BuscarController extends Controller
{
    public function personas(Request $request){
        $term = $request->get('term');

        $consulta = Persona::where('nombre','LIKE','%'.$term.'%')->get();

        $datos = [];
        foreach ($consulta as $cons) {
            $datos[] = [
                'label' => $cons->nombre
            ];
        }

        return $datos; 
    }
}
