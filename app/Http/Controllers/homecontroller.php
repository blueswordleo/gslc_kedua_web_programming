<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class homecontroller extends Controller
{
    public function index()
    {
        return view('home',[
            "tittle" => "home",
            "posts" => home::all()
        ]);
    }

    public function show($slug){
        /** cara pengambilan array bersyarat */
            
        return view('slug',[
            "tittle" => "article",
            "posts" => home::find($slug),
            "post" => home::all()
        ]);    
    }
}
