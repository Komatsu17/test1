<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        $title = 'Teste - Contato';
        return view('contact', compact('title'));
    }
}
