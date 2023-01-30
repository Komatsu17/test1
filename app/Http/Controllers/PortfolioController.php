<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        $title = "Teste - Portfolio";
        return view('portfolio', compact('title'));
    }
}
