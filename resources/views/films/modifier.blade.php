
    @extends('layouts.app')


    @section('titre', 'Morifier Film')


    @section('contenu')

    <h1>Ajouter un acteur</h1>
    <form method="POST" action="{{ route('films.update', [$film->id]) }}">
        @csrf
        @method('PATCH')
        
        <label for="nomActeur">Nom du film</label>
        <input type="text" name="nom" value="{{old('nom',$film->nom)}}">
        <label for="nomActeur">Durée du film (en minutes)</label>
        <input type="text" name="duree" value="{{old('duree',$film->duree)}}">
        <label for="nomActeur">Cote du film</label>
        <input type="text" name="cote" value="{{old('cote',$film->cote)}}">
        <label for="nomActeur">Réalisateur du film</label>
        <input type="text" name="realisateur" value="{{old('realisateur',$film->realisateur)}}">
        <label for="nomActeur">Genre du film</label>
        <input type="text" name="genre" value="{{old('genre',$film->genre)}}">
        <label for="nomActeur">Affiche du film</label>
        <input type="text" name="image" value="{{old('image',$film->image)}}">
        <label>Bande-Annonce du film</label>
        <input type="text" name="preview" value="{{old('preview',$film->preview)}}">
        <button type="submit">Enregisterer</button>

    </form>

    @endsection