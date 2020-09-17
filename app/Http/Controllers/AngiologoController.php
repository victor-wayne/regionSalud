<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;

class AngiologoController extends Controller
{

    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 17);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 17);

        return view('angiologos.index', compact('medicos', 'areas'));
    }


    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();

        $calificaciones = Calificacion::where('post_id', $medicos->id)->get();
        $i = 0;
        $sumatoria = 0;
        foreach ($calificaciones as $key) {
            $sumatoria += $key->calificacion;
            $i++;
        }
        if ($i > 0) {
            $promedio = $sumatoria / $i;
            $caliPromedio = round($promedio, 2);
        } else
            $caliPromedio = 0;
        //dd($medicos);
        return view('angiologos.show', compact('medicos', 'comments', 'caliPromedio'));
    }

}
