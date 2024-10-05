<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anime;

class home_controller extends Controller
{
    public function showHomePage(){

        $anime = Anime::all();
        return view('home',
        [
            'anime'=>$anime
        ]
    );
    }
}
