<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Medico;

class PsicologosController extends Controller
{
    public function index()
    {
         $medicos = Medico::All()
            ->where('area_id', '=', 31);
          //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 31);
        
        return view('psicologos.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        //dd($medicos);
        return view('psicologos.show', compact('medicos', 'comments'));
    }
}
