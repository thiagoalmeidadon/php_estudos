<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $titulo = 'landing';
        return view('site.home', compact('titulo'));
    }
}
