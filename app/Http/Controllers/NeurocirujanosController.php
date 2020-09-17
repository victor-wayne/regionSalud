<?php

namespace App\Http\Controllers;

use App\Area;
use App\Medico;
use Illuminate\Http\Request;

class NeurocirujanosController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 8);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 8);

        return view('neurocirujanos.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        //dd($medicos);
        return view('neurocirujanos.show', compact('medicos', 'comments'));
    }
}
