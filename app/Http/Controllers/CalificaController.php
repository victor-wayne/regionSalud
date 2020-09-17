<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CalificaFormRequest;
use App\Calificacion;

class CalificaController extends Controller
{
	public function califica(CalificaFormRequest $request)
	{
		$calificacion = new Calificacion();

		$calificacion->calificacion = $request->get('calificacion');
		$calificacion->post_id = $request->get('post_id');
		$calificacion->medico_id = $request->get('post_id');
		//dd($calificacion);
		$calificacion->save();

		return redirect()->back()->with('statusCal', 'Calificación guardada correctamente');
	}
}