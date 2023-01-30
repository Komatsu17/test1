<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $title = "Teste - Sobre";
        return view('about', compact('title'));
    }

}
