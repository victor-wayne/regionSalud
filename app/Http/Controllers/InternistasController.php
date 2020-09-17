<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Medico;

class InternistasController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 7);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 7);

        return view('internistas.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        //dd($medicos);
        return view('internistas.show', compact('medicos', 'comments'));
    }
}
