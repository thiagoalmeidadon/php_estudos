<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    private  $v = 1;

    public function contato(){
        var_dump($_GET);
        return view('site.contato');
    }
}
