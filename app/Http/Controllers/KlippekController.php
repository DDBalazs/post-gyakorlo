<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\klippek;

class KlippekController extends Controller
{
    public function Klipp(){
        return view('klipp', [
            'result'    => klippek::all()
        ]);
    }
    public function KlippData(Request $req){
        $req->validate([
            'eloado'    =>  'required',
            'cim'       =>  'required',
            'youtube'   =>  'required|url'
        ],[
            'eloado.required'   => "Előadót kötelező megadni!",
            'cim.required'      => "Szám címét kötelező megadni!",
            'youtube.required'  => "YouTube linket kötelező megadni!",
            'youtube.url'       => "Érvényes linket adjon meg!"
        ]);
    }
}
