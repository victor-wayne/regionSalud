<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Medico;

class CardiologosController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 1);
        //dd($medicos);
        //$data = [];
        //$data['medicos'] = $medicos;

        $areas = Area::All()
            -> where('id', '=', 1);

        return view('cardiologos.index', compact('medicos','areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        $califica = $medicos->calificacion()->get();
        //dd($medicos);
        return view('cardiologos.show', compact('medicos', 'comments', 'califica'));
    }
}
