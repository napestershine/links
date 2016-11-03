<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $links = \App\Link::all();
        return view('welcome', compact('links'));

    }
}
