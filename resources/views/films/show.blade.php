
    @extends('layouts.app')


    @section('titre', 'Zoom sur le film')

    @section('contenu')
    <div style="margin-top: 3% ;">
        <h1>{{$film->nom}}</h1>
        <img src="{{asset($film->image)}}"  width="15%" height="35%">
        <h3> Realisateur: {{$film->realisateur}}</h3>
        <h3> Cote: {{$film->cote}}</h3>
        <h3> Durée: {{$film->duree}} minutes</h3>
        <h3> Genre: {{$film->genre}}</h3>
        <iframe width="560" height="315" src="{{$film->preview}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
    </div>
    <form method="POST" action="{{route('films.destroy', [$film->id])}}">
        @csrf
        @method('DELETE')
        <button id="bouttonAj" type="submit">Supprimer</button>
    </form>
    <a id="bouttonAj" href="{{route('films.edit', [$film->id]) }}">Editer le film</a>

    @endsection
