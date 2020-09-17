<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        return view('region.index');
    }

    public  function show()
    {
        return view('region.show');
    }

    public function contact()
    {
        return view('region.contact');
    }
}
