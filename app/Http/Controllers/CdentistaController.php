<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;

class CdentistaController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 25);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 25);

        return view('cdentista.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        $califica = $medicos->calificacion()->get();
        //dd($medicos);
        return view('dentistas.show', compact('medicos', 'comments', 'califica'));
    }
}
