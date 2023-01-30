<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke() 
    {
        $title = "Teste - Home";
        return view('welcome', compact('title'));
    }
}
