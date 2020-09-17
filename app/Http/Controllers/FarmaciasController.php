<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmacia;

class FarmaciasController extends Controller
{
    public function index()
    {
        $farmacias = Farmacia::all();
        //dd($far);
        //$data = [];
        //$data['far'] = $far;
        return view('farmacias.index', compact('farmacias'));
    }

    public function show($slug)
    {
        $farmacias = Farmacia::where('slug', $slug)->first();
        //$comments = $medicos->comments()->get();
        //dd($medicos);

        $parts = explode('*', $farmacias->extract);
        $var_tels = explode('*',$farmacias->telefono_sec);
        $var_horarios = explode('*', $farmacias->horario_atencion);
        $var_ciudades = explode('*', $farmacias->ciudad);
        $var_address_secc = explode('*', $farmacias->address_sec);

        return view('farmacias.show', compact('farmacias', 'parts', 'var_tels', 'var_horarios', 'var_ciudades',
            'var_address_secc' ));
    }


}
