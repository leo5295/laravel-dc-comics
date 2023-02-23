<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        $links = config('db.links');
        return view('homepage', compact('links'));
    }
}
