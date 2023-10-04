<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $properties = Property::orderBy('created_at', 'desc')->limit(4)->get();
        return view('hom', ['properties' => $properties]);
    }

}

