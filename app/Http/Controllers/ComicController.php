<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function index()
    {

        // $series = config('db.series');
        $links = config('db.links');
        // return view('home', compact('series', 'links'));

        $series = Comic::all();

        return view('home', compact('series', 'links'));
    }
}
