<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class HomeController extends Controller
{
    public function index(){
        
        $carousel = Asset::where('type', 'carousel')->get();
        
        return view('home', compact('carousel'));
    }
}
