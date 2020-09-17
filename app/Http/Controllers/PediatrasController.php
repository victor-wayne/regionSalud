<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Area;
use App\Calificacion;

class PediatrasController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 12);
        //dd($medicos);

        $areas = Area::All()
            -> where('id', '=', 12);

        return view('pediatras.index', compact('medicos', 'areas'));
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

        $parts = explode('*', $medicos->extract);
        $var_tels = explode('*',$medicos->telefono_sec);
        $var_consultorios = explode('*', $medicos->consultorio);
        $var_ciudades = explode('*', $medicos->ciudad);
        $var_address_secc = explode('*', $medicos->address_sec);
        //dd($var_tels);

        return view('pediatras.show', compact('medicos', 'comments', 'caliPromedio', 'parts',
            'var_tels', 'var_consultorios', 'var_ciudades', 'var_address_secc'));
    }
}


