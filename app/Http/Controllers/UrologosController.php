<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;

class UrologosController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 24);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 24);

        return view('urologos.index', compact('medicos', 'areas'));
    }
}
