<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function comics()
    {
        $comics = config('comics');
        return view('pages.comics', compact('comics'));
    }
}
