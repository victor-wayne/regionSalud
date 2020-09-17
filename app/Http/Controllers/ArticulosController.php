<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticuloFormRequest;
use App\Upload;

class ArticulosController extends Controller
{
    public function index()
    {
        return view('articulos.index');
    }

    public function sube()
    {
    	return view('articulos.sube');
    }

    public function store(ArticuloFormRequest $request)
    {
    	try {
    	$upload = new Upload();
        $upload->title = $request->get('title');
        $upload->filename = $request->logo->getClientOriginalName();
        $upload->imagen = $request->img->getClientOriginalName();
        $upload->user_id = 1;
        dd($upload);

        $upload->save();
        $request->logo->storeAs('logos', $upload->id.'_'.$request->logo->getClientOriginalName());
        $request->logo->storeAs('logos', $upload->id.'_'.$request->img->getClientOriginalName());
    	} catch (Exception $e) {
    		report($e);

    		return false;
    	}

        return redirect()->back()->with('status', 'Artículo guardado correctamente');
    }
}
