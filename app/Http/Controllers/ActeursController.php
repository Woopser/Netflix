<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acteur;
use Illuminate\Support\Facades\Log;

class ActeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $acteur = Acteur::all();
        $films = Film::all();
        return view('acteur.createActeurFilm', compact('acteurs','films'));
    }

    public function storeActeurFilm()
    {
        
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
