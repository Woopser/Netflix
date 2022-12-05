
    @extends('layouts.app')


    @section('titre', 'Modifier Acteur')


    @section('contenu')

    <h1>Modifier un acteur</h1>
    <form method="POST" action="{{ route('acteurs.update', [$acteur->id]) }}">
        @csrf
        @method('PATCH')
        
        <label for="nomActeur">Nom de l'acteur</label>
        <input type="text" name="nom" value="{{old('nom',$acteur->nom)}}">
        <label for="nomActeur">Prenom</label>
        <input type="text" name="prenom" value="{{old('prenom',$acteur->prenom)}}">
        <label for="nomActeur">Taille</label>
        <input type="text" name="taille" value="{{old('taille',$acteur->taille)}}">
        <label for="nomActeur">Age de l'acteur</label>
        <input type="text" name="age" value="{{old('age',$acteur->age)}}">
        <label for="nomActeur">Portrait de l'acteur</label>
        <input type="text" name="image" value="{{old('image',$acteur->image)}}">
        <button type="submit">Enregisterer</button>

    </form>

    @endsection