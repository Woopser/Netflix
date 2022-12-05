@extends('layouts.app')


@section('titre', 'Zoom sur acteur')

@section('contenu')
<div style="margin-top: 3% ;">
    <h1>{{$acteur->prenom}} {{$acteur->nom}}</h1>
    <img src="{{asset($acteur->image)}}"  width="15%" height="35%">
    <h3> Age: {{$acteur->age}}</h3>
    <h3> taille: {{$acteur->taille}}</h3>
    
    
</div>
 <form method="POST" action="{{route('acteurs.destroy', [$acteur->id])}}">
    @csrf
    @method('DELETE')
    <button id="bouttonAj" type="submit">Supprimer</button>
</form> 
 <a id="bouttonAj" href="{{route('acteurs.edit', [$acteur->id]) }}">Editer le acteur</a> 

@endsection