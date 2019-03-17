<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Expertise;
use App\Stat;

class HomeController extends Controller
{
    public function index() 
    {
        $about = About::where('display', 1)->first();
        $expertise = Expertise::all();
        $stats = Stat::all(); 

        $data = array(
            'about' => $about,
            'expertise' => $expertise,
            'stats' => $stats,
        );

        return view('home.index')->with('data', $data);
    }
}
