<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorios;

class LaboratoriosController extends Controller
{
    public function index()
    {
         $laboratorios = Laboratorios::all();
        return view('laboratorios.index', compact('laboratorios'));

    }


    public function show($slug)
    {
        $laboratorios = Laboratorios::where('slug', $slug)->first();
        //$comments = $medicos->comments()->get();
        //dd($medicos);

        $parts = explode('*', $laboratorios->extract);
        $var_tels = explode('*',$laboratorios->telefono_sec);
        $var_horarios = explode('*', $laboratorios->horario_atencion);
        $var_ciudades = explode('*', $laboratorios->ciudad);
        $var_address_secc = explode('*', $laboratorios->address_sec);

        return view('laboratorios.show', compact('laboratorios', 'parts', 'var_tels', 'var_horarios',
            'var_ciudades', 'var_address_secc'));
    }
}
