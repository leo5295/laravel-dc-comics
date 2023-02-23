<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {

        // $series = config('db.series');
        $home = config('db.links');
        // return view('home', compact('series', 'links'));

        return view('home', compact('series', 'links'));
    }
}
