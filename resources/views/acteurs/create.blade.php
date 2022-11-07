
    @extends('layouts.app')


    @section('titre', 'Ajout Acteurs')


    @section('contenu')

    <h1>Aouter un acteur</h1>
    <form method="POST" action="{{ route('acteurs.store') }}">
        @csrf
        
        <div id="formele">
            <label for="nomActeur">Nom de l'acteur</label>
            <input type="text" name="nom">
        </div>

        <div id="formele">
            <label for="nomActeur">Prenom de l'acteur</label>
            <input type="text" name="prenom">
        </div>

        <div id="formele">
            <label for="nomActeur">Âge de l'acteur</label>
            <input type="text" name="age">
        </div>

        <div id="formele">
            <label for="nomActeur">Taille de l'acteur (en cm)</label>
            <input type="text" name="taille">
        </div>

        <div id="formele">
            <label for="nomActeur">Image de l'acteur</label>
            <input type="text" name="image">
        </div>


        <button type="submit">Enregisterer</button>

    </form>

    @endsection
