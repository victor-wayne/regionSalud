<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;


class OdontopediatrasController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 34);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 28);

        return view('odontopediatras.index', compact('medicos', 'areas'));
    }
}
