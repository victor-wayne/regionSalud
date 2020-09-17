<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Medico;

class OftalmologosController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 10);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 10);

        return view('oftalmologos.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        //dd($medicos);
        return view('oftalmologos.show', compact('medicos', 'comments'));
    }
}
