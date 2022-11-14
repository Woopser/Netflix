
    @extends('layouts.app')


    @section('titre', 'Ajout Acteurs')


    @section('contenu')

    <h1>Ajouter un acteur</h1>
    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        
        <label for="nomActeur">Nom du film</label>
        <input type="text" name="nom">
        <label for="nomActeur">Durée du film (en minutes)</label>
        <input type="text" name="duree">
        <label for="nomActeur">Cote du film</label>
        <input type="text" name="cote">
        <label for="nomActeur">Réalisateur du film</label>
        <input type="text" name="realisateur">
        <label for="nomActeur">Genre du film</label>
        <input type="text" name="genre">
        <label for="nomActeur">Affiche du film</label>
        <input type="text" name="image">
        <label>Bande-Annonce du film</label>
        <input type="text" name="preview">
        <button type="submit">Enregisterer</button>

    </form>

    @endsection