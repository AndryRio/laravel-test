<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {   
        $x=10;
        return view('home', compact('x'));
    }
}
