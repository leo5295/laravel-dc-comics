<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = config('db.links');
        // return view('home', compact('series', 'links'));

        $series = Comic::all();

        return view('comics.index', compact('series', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $links = config('db.links');
        return view('comics.create', compact('links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:25',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:50',
            'series' => 'required|max:88',
            'sale_date' => 'required|date',
            'type' => 'nullable',
        ]);
        Comic::create($validatedData);
        // Comic::create($request->all());
        return redirect('/comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        $links = config('db.links');
        if ($comic) {
            $data = [
                "comic" => $comic,
                "links" => $links
            ];
            return view('comics.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $links = config('db.links');
        $data = [
            'comic' => $comic,
            "links" => $links
        ];
        return view('comics.edit', compact('comic', 'links'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:25',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:50',
            'series' => 'required|max:88',
            'sale_date' => 'required|date',
            'type' => 'nullable',
        ]);
        // $data = $request->all();
        $comic->update($validatedData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
