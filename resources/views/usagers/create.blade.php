@extends('layouts.app')


    @section('titre', 'Ajout Acteurs')


    @section('contenu')

    <h1>Ajouter un utilisateur</h1>
    <form method="POST" action="{{ route('usagers.store') }}">
        @csrf
        
        <div id="formele">
            <label for="nomActeur">Adresse couriel de l'utilisateur</label>
            <input type="text" name="email">
        </div>

        <div id="formele">
            <label for="nomActeur">Mot de passe de l'utilisateur</label>
            <input type="password" name="password">
        </div>

        <div id="formele">
            <label for="nomActeur">identification de l'utilisateur</label>
            <input type="text" name="identification">
        </div>


        <button type="submit">Enregisterer</button>

    </form>

    @endsection
