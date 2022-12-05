<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acteur;
use Illuminate\Support\Facades\Log;
use App\Models\Film;


class ActeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acteurs = Acteur::all();
        return view('acteurs.index', compact('acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acteurs.create');
    }

    public function createActeurFilm()
    {
        $acteurs = Acteur::all();
        $films = Film::all();
        return view('acteurs.createActeurFilm', compact('acteurs','films'));
    }

    public function storeActeurFilm(Request $request)
    {
        try{
            $acteur = Acteur::find($request->acteur_id);
            $film = Film::find($request->film_id);

            //Verifie si relation existe
            if($acteur->films->contains($film)){
                Log::debug("La relation existe deja");
            }
            else{
                $acteur->films()->attach($film);
                $acteur->save();
            }
        }
        catch(\Throwable $e){
            Log::debug($e);
        }
        return redirect()->route('films.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $acteur = new Acteur($request->all());
            $acteur->save();
            return redirect()->route('films.index');
        }
        catch(\Throwable $e){
            /*Le fichier log est dans storage\log\laravel.log*/
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
    public function show(Acteur $acteur)
    {
        return view('acteurs.show', compact('acteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acteur = Acteur::findOrFail($id);
        return view('acteurs.modifier',compact('acteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $acteur = Acteur::findorFail($id);
            $acteur->nom = $request->nom;
            $acteur->prenom = $request->prenom;
            $acteur->taille = $request->taille;
            $acteur->image = $request->image;
            $acteur->age = $request->age;

            $acteur->save();
            return redirect()->route('acteurs.index')->with('message','Modification de ' . $acteur->nom . ' réussi!');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('acteurs.index')->with('message','Modification de ' . $acteur->nom . ' échoué');
        }
        return redirect()->route('acteurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $acteur = Acteur::findOrFail($id);
            //Si un acteur a des acteurs, on ne peut pas le supprimer
            $acteur->films()->detach();

            $acteur->delete();

            return redirect()->route('acteurs.index')->with('message', 'Suppression de ' . $acteur->nom . ' réussi!');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('acteurs.index')->with('message', 'Suppression de ' . $acteur->nom . ' échoué!');
        }
        return redirect()->route('acteurs.index');
    }
}
