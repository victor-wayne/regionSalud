<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('region.contact');
    }

    public function send(Request $request)
    {
        dd($request->all());


        // $data = $request->all();





    }


}
