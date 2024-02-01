<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.list', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Prendo i dati post
        $data = $request->all();

        // Creo nuova istanza fumetto
        $comic = new Comic();

        // Mappo i dati del form
        $comic->title = $data['title'];
        $comic->thumb = $data['thumb'];
        $comic->description = $data['description'];
        $comic->sale_date = $data['sale_date'];
        $comic->writers = $data['writers'];
        $comic->artists = $data['artists'];
        $comic->publisher = $data['publisher'];
        $comic->type = $data['type'];
        $comic->series = $data['series'];
        $comic->price = $data['price'];

        if ($data['sale_date'] > now()->toDateString()) {
            $comic->is_published = false;
        } else {
            $comic->is_published = true;
        }

        // Salvo l'istanza
        $comic->save();

        // Redirect alla pagina del nuovo fumetto (possiamo passare l'istanza in quanto la ricerca per id è automatica)
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
