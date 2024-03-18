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
        $header_links = config('headerLinks');
        return view('pages.comics', compact('header_links'));
    }
}
