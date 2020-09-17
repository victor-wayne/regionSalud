<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

class DentistasController extends Controller
{
    public function index()
    {
        $medicos = Medico::where('area_id', '=', 14)->first();
        //dd($medicos);
        $data = [];
        $data['medicos'] = $medicos;
        return view('dentistas.index', compact('data'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        //dd($medicos);
        return view('dentistas.show', compact('medicos', 'comments'));
    }
}
