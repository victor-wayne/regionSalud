<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospitales;

class HospitalesController extends Controller
{
    public function index()
    {

        $hospitales = Hospitales::all();

        return view('hospitales.index', compact('hospitales'));
    }

    public function show($slug)
    {
        $hospitales = Hospitales::where('slug', $slug)->first();
        //$comments = $medicos->comments()->get();
        //dd($medicos);

        $parts = explode('*', $hospitales->extract);
        $var_tels = explode('*',$hospitales->telefono_sec);
        $var_horarios = explode('*', $hospitales->horario_atencion);
        $var_ciudades = explode('*', $hospitales->ciudad);
        $var_address_secc = explode('*', $hospitales->address_sec);

        return view('hospitales.show', compact('hospitales', 'parts', 'var_tels', 'var_horarios', 'var_ciudades',
            'var_address_secc' ));
    }
}
