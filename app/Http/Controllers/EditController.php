<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke() {
        $title = "editar";
        return view ('message.messageEdit', compact('title'));
    }
}
