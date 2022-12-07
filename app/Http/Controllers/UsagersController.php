<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Models\Film;


class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usagers = Usager::all();
        return view('usagers.index', compact('usagers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    //Show login form
    public function showLoginForm()
    {
        return view('usagers.form');
    }

    //Login
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' =>$request->email, 'password'=>$request->password]);

        if($reussi){
            return redirect()->route('films.index')->with('message',"Connexion réussie");
        }
        else{
            return redirect()->route('login')->withErrors(['Informations invalides']);
        }
    }

    //Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message', 'Deconnecté');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        try{
            $usager = Usager::findOrFail($id);
            //Si un usager a des usagers, on ne peut pas le supprimer
            //$usager->films()->detach();

            $usager->delete();

            return redirect()->route('usagers.index')->with('message', 'Suppression de ' . $usager->nom . ' réussi!');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('usagers.index')->with('message', 'Suppression de ' . $usager->nom . ' échoué!');
        }
        return redirect()->route('usagers.index');
    }
}
