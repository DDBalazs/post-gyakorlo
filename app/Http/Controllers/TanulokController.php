<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tanulok;

class TanulokController extends Controller
{
    public function Tanulok(){
        return view('welcome',[
            'result' => tanulok::all()
        ]);
    }

    public function TanulokData(){

    }
}
