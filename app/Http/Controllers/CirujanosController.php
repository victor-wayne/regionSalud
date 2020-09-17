<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;

class CirujanosController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 2);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 2);

        return view('cirujanos.index', compact('medicos', 'areas'));
    }
}
