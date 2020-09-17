<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;


class EnfermeriaController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 33);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 33);

        return view('enfermeria.index', compact('medicos', 'areas'));
    }
}
