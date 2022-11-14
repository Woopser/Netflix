<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FilmRequest;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        $filmScience = Film::where('genre', '=', 'Science-Fiction')->get();
        $filmHorreur = Film::where('genre', '=', 'Horreur')->get();
       return view('films.index', compact('films','filmScience','filmHorreur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
        try{
            $film = new Film($request->all());
            $film->save();
            return redirect()->route('films.index');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('films.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.modifier',compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilmRequest $request, $id)
    {
        try{
            $film = Film::findorFail($id);
            $film->nom = $request->nom;
            $film->duree = $request->duree;
            $film->preview = $request->preview;
            $film->image = $request->image;
            $film->cote = $request->cote;
            $film->genre = $request->genre;
            $film->realisateur = $request->realisateur;

            $film->save();
            return redirect()->route('films.index')->with('message','Modification de ' . $film->nom . ' réussi!');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('films.index')->with('message','Modification de ' . $film->nom . ' échoué');
        }
        return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
