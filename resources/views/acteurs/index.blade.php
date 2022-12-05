@extends('layouts.app')

@section('titre', 'Netflix')


@section('contenu')
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Acteur de Netflix</h1>
          <div class="box">
            @if(count($acteurs))
              @foreach ($acteurs as $acteur)
              <a href="{{route('acteurs.show', [$acteur])}}" style="border: 2px white solid">
              <img src="{{$acteur->image}}" width="70%" height="85%">
              <p id="actorname">{{$acteur->prenom}} {{$acteur->nom}}</p>
              </a>  
      
             @endforeach
            @endif
          </div>
          
    </section>

    <br><br>
          <div style="text-align: center">
            <a id="bouttonAj" href="{{ route('acteurs.create') }}">Ajouter un acteur</a>
            <a id="bouttonAj" href="{{ route('acteurs.createActeurFilm') }}">Ajouter une relation</a>
          </div>

@endsection