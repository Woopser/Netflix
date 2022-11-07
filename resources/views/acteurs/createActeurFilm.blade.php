

    @extends('layouts.app')


    @section('titre', 'Ajout Acteurs')



    @section('contenu')
    <h1>Ajouter une relation Acteur-Film</h1>
    <form method="POST" action="{{ route('acteursFilms.store') }}">
        @csrf
        <select name="acteur_id" id="acteur_id">
            @foreach($acteurs as $acteur)
            <option value="{{ $acteur->id }}">{{$acteur->prenom}}  {{$acteur->nom}}</option>
            @endforeach
        </select>

        <select name="film_id" id="film_id">
            @foreach($films as $film)
            <option value="{{ $film->id }}">{{$film->nom}}</option>
            @endforeach
        </select>

        <button type="submit">Enregisterer</button>

    </form>

    @endsection
