
    @extends('layouts.app')


    @section('titre', 'Ajout Acteurs')


    @section('contenu')

    <h1>Aouter un acteur</h1>
    <form method="POST" action="{{ route('acteurs.store') }}">
        @csrf
        
        <label for="nomActeur">Nom de l'acteur</label>
        <input type="text" name="nom">
        <label for="nomActeur">Prenom de l'acteur</label>
        <input type="text" name="prenom">
        <label for="nomActeur">Âge de l'acteur</label>
        <input type="text" name="age">
        <label for="nomActeur">Taille de l'acteur (en cm)</label>
        <input type="text" name="taille">
        <label for="nomActeur">Image de l'acteur</label>
        <input type="text" name="image">
        <button type="submit">Enregisterer</button>

    </form>

    @endsection
