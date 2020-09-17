<?php

namespace App\Http\Controllers;

use App\Area;
use App\Medico;
use Illuminate\Http\Request;

class GeriatrasController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 34);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 19);

        return view('geriatras.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        //dd($medicos);
        return view('geriatras.show', compact('medicos', 'comments'));
    }
}
