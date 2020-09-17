<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;


class EndocrinologosController extends Controller
{
    public function  index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 34);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 4);

        return view('endocrinologos.index', compact('medicos', 'areas'));
    }
}
